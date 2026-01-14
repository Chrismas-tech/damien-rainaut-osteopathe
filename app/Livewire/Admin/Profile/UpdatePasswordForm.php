<?php

namespace App\Livewire\Admin\Profile;

use App\Actions\Admin\Profile\UpdatePassword;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UpdatePasswordForm extends Component
{
    use LivewireAlert;

    public User $user;
    public string $currentPassword = '';
    public string $password = '';
    public string $passwordConfirmation = '';

    public bool $currentPasswordValid = false;
    public bool $toggleCurrentPasswordEye = false;
    public bool $togglePasswordConfirmationEye = false;
    public bool $togglePasswordEye = false;
    public bool $isFormValid = false;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function rules()
    {
        return [
            'currentPassword' => 'required|current_password',
            'password' => [
                'required',
                'different:currentPassword',
                Password::min(9)->mixedCase()->letters()->numbers()->symbols(),
            ],
            'passwordConfirmation' => 'required|same:password',
        ];
    }

    public $messages = [
        'currentPassword.required' => 'This current password field is required.',
        'currentPassword.current_password' => 'The current password field is incorrect.',
        'password.required' => 'This field password is required.',
        'passwordConfirmation.required' => 'This field password confirmation is required.',
    ];

    public function CurrentPasswordEyeToggle()
    {
        $this->toggleCurrentPasswordEye = !$this->toggleCurrentPasswordEye;
    }

    public function PasswordEyeToggle()
    {
        $this->togglePasswordEye = !$this->togglePasswordEye;
    }

    public function PasswordConfirmationEyeToggle()
    {
        $this->togglePasswordConfirmationEye = !$this->togglePasswordConfirmationEye;
    }

    public function updatedCurrentPassword($value)
    {
        if (Hash::check($value, $this->user->password)) {
            $this->currentPasswordValid = true;
        } else {
            $this->currentPasswordValid = false;
        }
    }

    public function updated($property)
    {
        try {
            $this->validate();
            // Si $this->validate() n'est pas correct => catch
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
            'currentPassword',
            'password',
            'passwordConfirmation'
        );
    }

    public function render()
    {
        return view('livewire.admin.profile.update-password-form');
    }
}
