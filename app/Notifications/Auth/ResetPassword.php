<?php

namespace App\Notifications\Auth;

use App\Models\EmailScheduler;
use App\Models\Website;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class ResetPassword extends Notification implements ShouldQueue
{
    use Queueable;

    public string $token;
    public string $logoUrl;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->logoUrl = route('website.home');
        $this->token = $token;
        $this->queue = $this->onQueue(EmailScheduler::where('page_name', 'ResetPassword')->first()->queue_job_name);
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
    protected function linkUrl($notifiable)
    {
        return route(
            'password.reset',
            [
                'token' => $this->token,
                'email' => $notifiable->getEmailForPasswordReset()
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
            ->subject(Lang::get('Reset Password Notification'))
            ->markdown(
                'emails.user.forgot-password',
                [
                    'logoUrl' => $this->logoUrl,
                    'actionUrl' => $this->linkUrl($notifiable),
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
