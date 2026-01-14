<?php

namespace App\Http\Controllers;

class AdminPagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function images_gallery()
    {
        return view('admin.pages.website.components.images-gallery');
    }

    public function youtube_videos()
    {
        return view('admin.pages.website.components.youtube-videos');
    }

    public function email_scheduler()
    {
        return view('admin.pages.email-scheduler');
    }

    public function profile()
    {
        return view('admin.pages.profile');
    }

    public function website_settings()
    {
        return view('admin.pages.website-settings');
    }

    public function seo()
    {
        return view('admin.pages.seo');
    }

    public function google_reviews()
    {
        return view('admin.pages.website.components.google-reviews');
    }

    public function slider()
    {
        return view('admin.pages.website.components.slider');
    }

    public function jumbotrons()
    {
        return view('admin.pages.website.components.jumbotrons');
    }

    public function nanogallery()
    {
        return view('admin.pages.website.components.nanogallery');
    }

    public function contact_form()
    {
        return view('admin.pages.website.components.contact-form');
    }
}
