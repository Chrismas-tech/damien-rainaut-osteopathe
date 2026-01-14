<?php

namespace Database\Seeders;

use App\Models\TimeInSeconds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeInSecondsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | EXPIRATION TIMES SECONDS
        |--------------------------------------------------------------------------
        */

        $array = [
            [
                'time_in_seconds' => 60,
                'name' => 'Every 1 minute - 60 seconds',
                'cron' => '* * * * *',
            ],
            [
                'time_in_seconds' => 300,
                'name' => 'Every 5 minutes - 300 seconds',
                'cron' => '*/5 * * * *',
            ],
            [
                'time_in_seconds' => 600,
                'name' => 'Every 10 minutes - 600 seconds',
                'cron' => '*/10 * * * *',
            ],
            [
                'time_in_seconds' => 1200,
                'name' => 'Every 20 minutes - 1200 seconds',
                'cron' => '*/20 * * * *',
            ],
            [
                'time_in_seconds' => 1800,
                'name' => 'Every 30 minutes - 1800 seconds',
                'cron' => '*/30 * * * *',
            ],
            [
                'time_in_seconds' => 86400,
                'name' => 'Every day - 86400 seconds',
                'cron' => '0 0 * * *',
            ],
            [
                'time_in_seconds' => 172800,
                'name' => 'Every 2 days  - 172800 seconds',
                'cron' => '0 0 */2 * *',
            ],
            [
                'time_in_seconds' => 259200,
                'name' => 'Every 3 days  - 259200 seconds',
                'cron' => '0 0 */3 * *',
            ],
            [
                'time_in_seconds' => 345600,
                'name' => 'Every 4 days - 345600 seconds',
                'cron' => '0 0 */4 * *',
            ],
            [
                'time_in_seconds' => 604800,
                'name' => 'Every week  - 604800 seconds',
                'cron' => '0 0 * * 0',
            ],
            [
                'time_in_seconds' => 1209600,
                'name' => 'Every two weeks  - 1209600 seconds',
                'cron' => '0 0 */14 * *',
            ],
        ];

        foreach ($array as $key => $time) {
            TimeInSeconds::create([
                'name' => $time['name'],
                'time_in_seconds' => $time['time_in_seconds'],
                'cron' => $time['cron'],
            ]);
        }
    }
}
