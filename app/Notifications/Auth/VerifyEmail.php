<?php

namespace App\Notifications\Auth;

use App\Models\EmailScheduler;
use App\Models\Website;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends Notification implements ShouldQueue
{
    use Queueable;
    public string $logoUrl;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->logoUrl = route('website.home');
        $this->queue =  $this->onQueue(EmailScheduler::where('page_name', 'VerifyEmail')->first()->queue_job_name);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }


    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from(config('mail.from.address'), Website::getSettings()->application_name)
            ->subject(Lang::get('Verify Email Address'))
            ->markdown(
                'emails.user.verify-email',
                [
                    'logoUrl' => $this->logoUrl,
                    'actionUrl' =>  $this->verificationUrl($notifiable),
                    'receiverName' => $notifiable->lastname,
                ]
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
