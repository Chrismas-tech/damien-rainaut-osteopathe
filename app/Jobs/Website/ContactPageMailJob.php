<?php

namespace App\Jobs\Website;

use App\Mail\Website\ContactPageMail;
use App\Models\EmailScheduler;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactPageMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public array $attributes;

    /**
     * Create a new job instance.
     */
    public function __construct($attributes)
    {
        $this->onQueue(EmailScheduler::where('page_name', 'Contact')->first()->queue_job_name);
        $this->attributes = $attributes;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            Mail::to(config('mail.from.address'))
            ->send(new ContactPageMail($this->attributes));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
