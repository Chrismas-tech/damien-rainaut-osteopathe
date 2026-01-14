<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\CustomClasses;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $nameRoute = CustomClasses::getRouteNameByUserRole($request);

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route($nameRoute, absolute: false) . '?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route($nameRoute, absolute: false) . '?verified=1');
    }
}
