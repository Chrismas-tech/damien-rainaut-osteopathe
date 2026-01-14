<?php

namespace App\Actions\Admin\Website\Email;


use App\Models\EmailScheduler;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateEmailScheduler
{
    use AsAction;

    public function handle(array $attributes, $schedulerId)
    {
        return EmailScheduler::where('id', $schedulerId)->update([
            'page_name' => $attributes['pageName'],
            'queue_job_name' => $attributes['queueJobName'],
            'nb_emails_freq' => $attributes['nbEmailsFrequency'],
            'sending_frequency_id' => $attributes['sendingFrequency'],
        ]);
    }
}
