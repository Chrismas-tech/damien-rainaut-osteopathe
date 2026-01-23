<?php

namespace App\Http\Controllers;

class WebsitePagesController extends Controller
{
    public function home()
    {
        $images = \App\Models\ImagesGallery::inRandomOrder()->take(20)->get();
        return view('website.pages.home', compact('images'));
    }

    public function terms_of_services()
    {
        return view('website.pages.terms-of-services');
    }

    public function privacy_policy()
    {
        return view('website.pages.privacy-policy');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function honoraires()
    {
        return view('website.pages.honoraires');
    }

    public function credits()
    {
        return view('website.pages.credits');
    }
}
