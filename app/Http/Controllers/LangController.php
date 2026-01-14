<?php

namespace App\Http\Controllers;
use App\Models\Website;

class LangController extends Controller
{
    public function lang_fr()
    {
        Website::first()->update(['lang' => 'fr']);
        return redirect()->back();
    }

    public function lang_en()
    {
        Website::first()->update(['lang' => 'en']);
        return redirect()->back();
    }
}
