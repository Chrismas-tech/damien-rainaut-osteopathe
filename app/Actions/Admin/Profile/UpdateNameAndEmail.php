<?php

namespace App\Actions\Admin\Profile;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateNameAndEmail
{
    use AsAction;

    public function handle(array $attributes, User $user)
    {
        $user->update([
            'firstname' => $attributes['firstname'],
            'lastname' => $attributes['lastname'],
            'email' => $attributes['email'],
        ]);

        return true;
    }
}
