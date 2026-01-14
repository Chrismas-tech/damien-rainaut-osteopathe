<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.pages.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        /* dd($request->all()); */

        $request->validate(
            [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                /* 'address' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'regex:/^0[0-9]{9}$/'], */
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'terms' => ['required'],
                'role' => ['required', new Role],
            ],
            [
                'phone.regex' => 'The phone number must begin with a 0 and contain 10 digits.',
                'terms.required' => 'You must agree to the terms of services and privacy policy.',
            ]
        );

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            /* 'address' => $request->address,
            'phone' => $request->phone, */
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'agent',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('agent.dashboard', absolute: false))->with('success', 'You are now logged in !');;
    }
}
