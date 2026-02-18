<?php

namespace App\Http\Controllers;

class LangController extends Controller
{
    public function lang_switch($locale)
    {
        if (in_array($locale, ['fr', 'en', 'de', 'it', 'es'])) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}
