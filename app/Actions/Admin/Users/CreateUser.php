<?php

namespace App\Actions\Admin\Users;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateUser
{
    use AsAction;

    public function handle(array $attributes)
    {
        unset($attributes['password_no_bcrypt']);
        return User::create($attributes);
    }
}
