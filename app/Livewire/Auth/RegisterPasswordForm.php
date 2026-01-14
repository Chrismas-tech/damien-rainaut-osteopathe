<?php

namespace App\Livewire\Auth;

use App\Actions\Admin\Profile\UpdatePassword;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RegisterPasswordForm extends Component
{
    use LivewireAlert;

    public User $user;
    public string $password = '';
    public string $passwordConfirmation = '';

    public bool $togglePasswordConfirmationEye = false;
    public bool $togglePasswordEye = false;
    public bool $isFormValid = true;

    public function rules()
    {
        return [
            'password' => [
                'required',
                Password::min(9)->mixedCase()->letters()->numbers()->symbols(),
            ],
            'passwordConfirmation' => 'required|same:password',
        ];
    }

    public $messages = [
        'password.required' => 'This field password is required.',
        'passwordConfirmation.required' => 'This field password confirmation is required.',
    ];

    public function PasswordEyeToggle()
    {
        $this->togglePasswordEye = !$this->togglePasswordEye;
    }

    public function PasswordConfirmationEyeToggle()
    {
        $this->togglePasswordConfirmationEye = !$this->togglePasswordConfirmationEye;
    }

    public function updated($property)
    {
        try {
            $this->validate();
            // Si $this->validate() n'est pas correct le script s'arrête ici
            $this->isFormValid = true;
        } catch (Exception $e) {
            $this->isFormValid = false;
        }

        $this->validateOnly($property);
    }


    public function submit()
    {
        $this->validate();

        if (UpdatePassword::run($this->validate(), $this->user)) {
            $this->alert('success', 'Password updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }

        $this->reset(
            'password',
            'passwordConfirmation'
        );
    }

    public function render()
    {
        return view('livewire.auth.register-password-form');
    }
}
