<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Website;

class SendCredentialsNewUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $attributes;

    public string $actionUrl;
    public string $logoUrl;

    public string $senderEmail;
    public string $senderName;
    public string $receiverEmail;
    public string $receiverName;

    public string $role;

    public $subject; /* Attention, pas de typage ICI ! */
    public string $message;
    public string $passwordNoBcrypt;

    /**
     * Create a new message instance.
     */
    public function __construct(array $attributes)
    {
        $this->logoUrl = route('website.home');
        $this->actionUrl = route('login');

        $this->senderEmail = config('mail.from.address');
        $this->senderName = Website::getSettings()->application_name;

        $this->receiverName = $attributes['firstname'] . ' ' . $attributes['lastname'];
        $this->receiverEmail = $attributes['email'];

        $this->role = $attributes['role'];

        $this->subject = 'Access available on ' . $this->senderName;
        $this->message = 'Please find your credentials below to access your personal account.';
        $this->passwordNoBcrypt = $attributes['password_no_bcrypt'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->senderEmail, $this->senderName),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.user.send-credentials-new-user',
            with: [
                'logoUrl' => $this->logoUrl,
                'actionUrl' => $this->actionUrl,
                'message' => $this->message,
                'receiverEmail' => $this->receiverEmail,
                'receiverName' => $this->receiverName,
                'passwordNoBcrypt' => $this->passwordNoBcrypt,
                'role' => $this->role,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
