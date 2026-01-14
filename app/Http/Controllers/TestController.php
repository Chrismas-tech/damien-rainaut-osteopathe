<?php

namespace App\Http\Controllers;

use App\Mail\Admin\NotifyUserNewDocumentsMail;
use App\Mail\Admin\SendCredentialsNewUserMail;
use App\Mail\Website\ContactPageMail;
use App\Models\User;
use App\Notifications\Auth\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function test_mail_contact()
    {
        $attributes = [
            'email' => 'alexandreBoton@example.com',
            'firstname' => 'Alexandre',
            'lastname' => 'Boton',
            'message' => 'This is the message',
        ];

        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactPageMail(
                    $attributes
                ));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function test_notify_user_new_documents()
    {
        $attributes = [
            'receiverEmail' => 'beatzkrystal@gmail.com',
            'firstname' => 'Krystal',
            'lastname' => 'Beatz',
            'role' => 'employee',
        ];

        try {
            Mail::to($attributes['receiverEmail'])
                ->send(new NotifyUserNewDocumentsMail(
                    $attributes
                ));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function test_send_credentials_new_user()
    {

        $attributes = [
            'receiverEmail' => 'beatzkrystal@gmail.com',
            'firstname' => 'Krystal',
            'lastname' => 'Beatz',
            'password_no_bcrypt' =>  Str::password(16, true, true, true, false),
        ];

        try {
            Mail::to($attributes['receiverEmail'])
                ->send(new SendCredentialsNewUserMail(
                    $attributes
                ));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function test_verify_email()
    {
        $user = User::create([
            'firstname' => 'Krystal',
            'lastname' => 'Beatz',
            'address' => '60 avenue de l\'Europe',
            'phone' => '0418451484',
            'email' => 'beatzkrystal@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'agent',
        ]);

        $user->notify(new VerifyEmail());
    }

    public function test_rename_folder()
    {
        /* $oldPathFolder = '/employee/8/D';
        $newPathFolder = '/employee/8/A'; */

        $oldPathFolder = Storage::disk('users-documents')->path('/employee/8/D');

        $newPathFolder = Storage::disk('users-documents')->path('/employee/8/A');

        rename($oldPathFolder, $newPathFolder);

        if (Storage::disk('users-documents')->exists($oldPathFolder)) {
            Storage::disk('users-documents')->move($oldPathFolder, $newPathFolder);
        }
    }
}
