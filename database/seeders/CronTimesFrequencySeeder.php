<?php

namespace Database\Seeders;

use App\Models\CronTimesFrequency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CronTimesFrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | CRON FREQUENCIES
        |--------------------------------------------------------------------------
        */

        $arrayCronFrequencies = [
            [
                'name' => 'Every Minute',
                'cron_frequency' => '* * * * *',
            ],
            [
                'name' => 'Every Two Minutes',
                'cron_frequency' => '*/2 * * * *',
            ],
            [
                'name' => 'Every Hour',
                'cron_frequency' => '0 * * * *',
            ],
            [
                'name' => 'Every Two Hours',
                'cron_frequency' =>  '0 */2 * * *',
            ],
            [
                'name' => 'Every Month',
                'cron_frequency' =>  '0 0 1 * *',
            ],
        ];

        foreach ($arrayCronFrequencies as $key => $frequency) {
            CronTimesFrequency::create([
                'name' => $frequency['name'],
                'cron_frequency' => $frequency['cron_frequency'],
            ]);
        }
    }
}
