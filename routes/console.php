<?php

use App\Models\EmailScheduler;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Schedule;

if (Schema::hasTable('email_schedulers')) {
    $emailSchedulers = EmailScheduler::all();

    foreach ($emailSchedulers as $key => $scheduler) {
        Schedule::command(
            'queue:work -v --queue=' . $scheduler->queue_job_name . ' --max-jobs=' . $scheduler->nb_emails_freq . ' --stop-when-empty'
        )
            ->cron($scheduler->time_in_seconds->cron)
            ->runInBackground();
    }
};
