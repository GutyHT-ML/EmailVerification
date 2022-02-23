<?php

namespace App\Http\Controllers;

use App\Mail\CodeVerification;
use App\Mail\EmailVerification;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request)
    {
      $user = User::create($request->all());
      Mail::to($user)->send(new EmailVerification($user));
      print('Debe verificar su email antes de iniciar sesión');
    }

    public function verifyEmail(Request $request) {
      $user = User::firstWhere('email', $request->input('email'))->first();
      if($user) {
        $user->email_verified_at = Carbon::now();
        $user->save();
        print('Email verificado correctamente');
      }else {
        print('Usuario no encontrado');
      }
    }

    public function login(Request $request)
    {
      $user = User::firstWhere('email', $request->input('email'))->first();
      if($user) {
        if ($user->email_verified_at != null) {
          if($user->verification_code == $request->input('code')) {
            print('Logged in');
            return view('home', [
              'name' => $user->name
            ]);
          } else {
            print('código erroneo');
          }  
        } else {
          print('Correo no verificado');
        }
      } else {
        print('Usuario no encontrado');
      }
    }

    public function requestCode(Request $request) 
    {
      $user = User::firstWhere('email', $request->input('email'))->first();
      if($user != null) {
        if($user->password == $request->input('password')) {
          $user->verification_code = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));
          $user->save();
          Mail::to($user)->send(new CodeVerification($user));
          return view('codeverification', [
            'email' => $user->email
          ]);
        } else {
          print('credenciales erroneas');
        }
      } else {
        print('Usuario no encontrado');
      }
    }
}
