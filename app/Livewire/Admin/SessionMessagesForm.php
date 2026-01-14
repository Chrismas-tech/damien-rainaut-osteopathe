<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SessionMessagesForm extends Component
{
    use LivewireAlert;

    public function mount()
    {
        if (Session::has('success')) {
            $this->alert('success', 'You are Logged In !');
        }
    }

    public function render()
    {
        return view('livewire.admin.session-messages-form');
    }
}
