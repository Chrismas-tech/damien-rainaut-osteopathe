<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginPasswordEyeForm extends Component
{
    public $togglePasswordEye = false;

    public function render()
    {
        return view('livewire.auth.login-password-eye-form');
    }

    public function togglePassword()
    {
        $this->togglePasswordEye = !$this->togglePasswordEye;
    }
}
