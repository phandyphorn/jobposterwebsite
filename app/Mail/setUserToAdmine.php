<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class setUserToAdmine extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct($body)
    {
        foreach ($body as $x => $val) {
            $this->$x = $val;
        }
    }


    public function build()
    {
        return $this->from("slmspnc519@gmail.com")->subject("Admine Team")->view('setUserToAdmine')
            ->with([
                'username' => $this->username,
            ]);
    }
}
