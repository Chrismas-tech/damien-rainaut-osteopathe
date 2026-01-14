<?php

namespace App\Actions\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdatePassword
{
    use AsAction;

    public function handle(array $attributes, User $user)
    {
        $user->update([
            'password' => Hash::make($attributes['password']),
        ]);

        return true;
    }
}
