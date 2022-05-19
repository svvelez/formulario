<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormularioMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $formulario;

    public function __construct($request)
    {
        $this->formulario = $request;
    }


    public function build()
    {
        return $this->view('emails.mail')
        ->from("soporteweb@dime.com.co")
        ->subject("Formulario de confidencialidad y transparencia");
    }
}
