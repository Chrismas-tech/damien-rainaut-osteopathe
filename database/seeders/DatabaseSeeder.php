<?php

namespace Database\Seeders;

use App\Helpers\CustomClasses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            WebsiteSeeder::class,
            SeoSeeder::class,
            TimeInSecondsSeeder::class,
            EmailSchedulerSeeder::class,
            GoogleReviewsSeeder::class,
            GoogleReviewsProfileSeeder::class
        ]);

        /*
        |--------------------------------------------------------------------------
        | ENSURE STORAGE LINK EXISTS
        |--------------------------------------------------------------------------
        */
        CustomClasses::storageLinkExists();

        /*
        |--------------------------------------------------------------------------
        | DELETE PUBLIC STORAGE DIRECTORY
        |--------------------------------------------------------------------------
        */
        Storage::disk('public')->deleteDirectory('/');

        /*
        |--------------------------------------------------------------------------
        | SCHEDULE RUN NOT WORKING
        |--------------------------------------------------------------------------
        */
        /* Artisan::call('schedule:run'); */
    }
}
