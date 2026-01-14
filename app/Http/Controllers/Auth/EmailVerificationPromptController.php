<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\CustomClasses;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $nameRoute = CustomClasses::getRouteNameByUserRole($request);

        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended(route($nameRoute, absolute: false))
            : view('auth.pages.verify-email');
    }
}
