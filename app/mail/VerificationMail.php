<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Signup;

class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(Signup $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.verify')
                    ->subject('Verify your email address');
    }
}

