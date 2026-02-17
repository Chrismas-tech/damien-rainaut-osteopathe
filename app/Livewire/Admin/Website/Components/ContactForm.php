<?php

namespace App\Livewire\Admin\Website\Components;

use App\Jobs\Website\ContactPageMailJob;
use App\Models\TimeInSeconds;
use App\Models\Website;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ContactForm extends Component
{
    use LivewireAlert;
    use WithRateLimiting;

    public string $email;
    public string $subject;
    public string $firstname;
    public string $lastname;
    public string $message;
    public bool $termsOfServices = false;

    public int $nbSubmitsPerday = 5; // 2

    public bool $isFormValid = false;

    public function rules()
    {
        return [
            'email' => 'required|email|string|min:3|max:255',
            'subject' => 'required|string|min:3|max:255',
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'termsOfServices' => 'accepted',
            'message' => 'required|string|min:3|max:1100',
        ];
    }

    public function messages()
    {
        return [
            'termsOfServices.required' => 'You must agree to the terms of service.'
        ];
    }

    public function updated($property)
    {
        try {
            $this->validate();
            $this->isFormValid = true;
        } catch (Exception $ex) {
            /* dd($ex->getMessage()); */
            $this->isFormValid = false;
        }
        $this->validate();
    }

    public function submit()
    {
        /* $this->clearRateLimiter(
            'submit',
        ); */

        try {
            $this->rateLimit(
                $this->nbSubmitsPerday,
                TimeInSeconds::find(6)->time_in_seconds,
            );

            ContactPageMailJob::dispatch($this->validate());

            $this->alert('success', 'Your Email has been sent to ' . Website::getSettings()->application_name . ' !');
        } catch (TooManyRequestsException $exception) {
            /* throw ValidationException::withMessages([
                'email' => "Slow down! Please wait another {$exception->secondsUntilAvailable} seconds to log in.",
            ]); */
            $this->alert('error', 'Slow down, you already sent us an email !');
        }

        $this->reset(
            'subject',
            'message',
            'firstname',
            'lastname',
            'email',
            'termsOfServices'
        );
    }

    public function render()
    {
        return view('livewire.admin.website.components.contact-form');
    }
}
