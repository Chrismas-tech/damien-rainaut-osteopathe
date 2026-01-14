<?php

namespace App\Actions\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteUsers
{
    use AsAction;

    public function handle(array $usersIds)
    {
        $users = User::findMany($usersIds);

        /* Delete Database Entries */
        /* foreach ($users as $user) {
            $userDocIds = $user->userDocuments->pluck('id')->toArray();
            DeleteUploadFiles::run($userDocIds);
        } */

        foreach ($users as $user) {
            Storage::disk('users-documents')->deleteDirectory($user->role . '/' . $user->id);
        }

        /* Delete Users */
        return User::destroy($usersIds);
    }
}
