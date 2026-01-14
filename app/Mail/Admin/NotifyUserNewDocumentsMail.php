<?php

namespace App\Mail\Admin;

use App\Models\Website;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyUserNewDocumentsMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $attributes;

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
        $this->senderEmail = config('mail.from.address');
        $this->senderName = Website::getSettings()->application_name;

        $this->receiverName = $attributes['firstname'] . ' ' . $attributes['lastname'];

        $this->logoUrl = route('website.home');
        $this->actionUrl = route($attributes['role'] . '.documents');

        $this->subject = 'New documents available on your account';
        $this->message = 'You have new documents available on your account.';
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
            markdown: 'emails.user.notify-user-new-documents',
            with: [
                'logoUrl' => $this->logoUrl,
                'actionUrl' => $this->actionUrl,
                'message' => $this->message,
                'receiverName' => $this->receiverName,
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
