<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeLienDeVotreSituationActuelle extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id,$url)
    {
        $this->url = $url;
        $this->id = $id;
      

    }

    public function build()
    {
        return $this->markdown('emails.LeLienDeVotreSituationActuelle')->with('url', $this->url,'id', $this->id);
    }
}
