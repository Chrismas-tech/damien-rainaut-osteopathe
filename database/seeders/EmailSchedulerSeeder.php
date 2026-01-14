<?php

namespace Database\Seeders;

use App\Models\EmailScheduler;
use App\Models\TimeInSeconds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailSchedulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'page_name' => 'Contact',
                'queue_job_name' => 'email_contact_page',
                'sending_frequency_id' => TimeInSeconds::find(1)->id,
                'nb_emails_freq' => 5,
            ],
            [
                'page_name' => 'ResetPassword',
                'queue_job_name' => 'email_reset_password_page',
                'sending_frequency_id' => TimeInSeconds::find(1)->id,
                'nb_emails_freq' => 5,
            ],
            [
                'page_name' => 'VerifyEmail',
                'queue_job_name' => 'email_verify_email_page',
                'sending_frequency_id' => TimeInSeconds::find(1)->id,
                'nb_emails_freq' => 5,
            ],
        ];

        foreach ($array as $array) {
            EmailScheduler::create([
                'page_name' => $array['page_name'],
                'queue_job_name' => $array['queue_job_name'],
                'sending_frequency_id' => $array['sending_frequency_id'],
                'nb_emails_freq' => $array['nb_emails_freq'],
            ]);
        }
    }
}
