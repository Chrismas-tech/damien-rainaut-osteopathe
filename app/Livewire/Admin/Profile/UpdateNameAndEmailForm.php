<?php

namespace App\Livewire\Admin\Profile;

use App\Actions\Admin\Profile\UpdateNameAndEmail;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UpdateNameAndEmailForm extends Component
{
    use LivewireAlert;

    public User $user;
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public bool $isFormValid = true;

    public function mount()
    {
        $this->firstname = Auth::user()->firstname;
        $this->lastname = Auth::user()->lastname;
        $this->email = Auth::user()->email;
        $this->user = User::where('id', Auth::user()->id)->first();
    }

    public $messages = [
        'firstname.required' => 'This field firstname is required.',
        'lastname.required' => 'This field lastname is required.',
        'email.required' => 'This field email is required.',
    ];

    public function rules()
    {
        return [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
        ];
    }

    public function updated($property)
    {
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    public function submit()
    {
        if (UpdateNameAndEmail::run($this->validate(), $this->user)) {
            $this->alert('success', 'Profile updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }


    public function render()
    {
        return view('livewire.admin.profile.update-name-and-email-form');
    }
}
