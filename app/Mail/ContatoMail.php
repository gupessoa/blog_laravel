<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $assunto;
    public $msg;
    public $tel;

    public function __construct($nome, $email, $tel, $assunto, $msg)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->tel = $tel;
        $this->assunto = $assunto;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contato');
    }
}
