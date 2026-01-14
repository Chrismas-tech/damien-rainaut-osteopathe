<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('email_schedulers', function (Blueprint $table) {
            $table->id();

            $table->string('page_name');
            $table->string('queue_job_name');
            /*
            |--------------------------------------------------------------------------
            | FREQUENCY ID :
            | Sending Frequency
            |--------------------------------------------------------------------------
            | NUMBER OF EMAILS FREQUENCY :
            | Number of emails in queue to be sent
            |--------------------------------------------------------------------------
            */
            $table->foreignId('sending_frequency_id')
                ->constrained('time_in_seconds');
            $table->unsignedBigInteger('nb_emails_freq');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_schedulers');
    }
};
