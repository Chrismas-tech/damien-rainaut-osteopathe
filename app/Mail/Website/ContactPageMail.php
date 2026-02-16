<?php

namespace App\Mail\Website;

use App\Models\User;
use App\Models\Website;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactPageMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $admin;

    public string $actionUrl;
    public string $logoUrl;

    public string $senderEmail;
    public string $senderName;
    public string $receiverEmail;
    public string $receiverName;

    public $subject; /* Attention, pas de typage ICI ! */
    public string $message;

    /**
     * Create a new message instance.
     */
    public function __construct(array $attributes)
    {
        $this->logoUrl = route('website.home');
        $this->actionUrl = route('website.home');

        $this->senderEmail = $attributes['email'];
        $this->senderName = $attributes['firstname'] . '-' . $attributes['lastname'];

        $this->receiverEmail = config('mail.from.address');
        $this->admin = User::where('role', 'admin')->first();
        $this->receiverName = $this->admin->firstname . ' ' . $this->admin->lastname;

        $this->subject = $attributes['subject'];
        $this->message = $attributes['message'];

        /* dd(
            'senderName : ' . $this->senderName,
        ); */
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), Website::getSettings()->application_name),
            subject: $this->subject,
            replyTo: new Address($this->senderEmail, $this->senderEmail),
            /* Attention, le repyTo n'accepte pas un string simple, il veut un email ! */
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.website.contact-page',
            with: [
                'logoUrl' => $this->logoUrl,
                'subject' => $this->subject,
                'receiverName' => $this->receiverName,
                'senderName' => $this->senderName,
                'senderEmail' => $this->senderEmail,
                'message' => $this->message,
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
