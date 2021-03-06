<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Route::get('/login', function() {
//   return view('login');
// });

Route::get('/verify-email', 'AuthController@verifyEmail');

Route::post('/request-code', 'AuthController@requestCode');

Route::post('login', 'AuthController@login');

Route::get('/register', function() {
  return view('register');
});

Route::post('/register', 'AuthController@register');

Route::post('/signup', 'AuthController@register');