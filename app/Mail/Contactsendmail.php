<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactsendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $title;
    public $body;
    public $name;
    public $email;
    public $phone;

    public function __construct($title, $body, $name, $email ,$phone)
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact')
                    ->subject('AW超跑租貸')
                    ->with([
                        'title' => $this->title,
                        'body' => $this->body,
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                    ]);
    }
}
