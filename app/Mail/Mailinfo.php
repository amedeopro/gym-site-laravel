<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Informations;

class Mailinfo extends Mailable
{
    use Queueable, SerializesModels;

    public $informations;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Informations $informations)
    {
        $this->informations = $informations;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('richiestaorari@sportflyclub.it')->view('mail.schedinfo');
    }
}
