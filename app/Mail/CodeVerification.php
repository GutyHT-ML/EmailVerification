<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CodeVerification extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $user, string $code)
    {
        $this->user = $user;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails/code', [
          'name' => $this->user,
          'code' => $this->code
        ]);
    }
}
