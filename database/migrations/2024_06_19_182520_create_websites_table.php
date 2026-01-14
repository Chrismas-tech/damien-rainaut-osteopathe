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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('application_name')->nullable();
            $table->string('email_website')->nullable();
            $table->string('address_service')->nullable();
            $table->string('phone_website')->nullable();
            $table->string('country_code_phone_website')->nullable();
            $table->string('whatsapp_phone')->nullable();
            $table->string('country_code_whatsapp_phone')->nullable();
            $table->string('lang')->nullable();
            $table->string('calendly_url')->nullable();
            $table->longText('faq')->nullable();
            $table->longtext('privacy_policy')->nullable();
            $table->longtext('terms_of_service')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_pinterest')->nullable();
            $table->string('link_instagram')->nullable();
            $table->longText('iframe_google_map_src')->nullable();
            $table->boolean('maintenance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
