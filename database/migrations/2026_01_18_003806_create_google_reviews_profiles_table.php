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
        Schema::create('google_reviews_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->bigInteger('general_rating')->default(0);
            $table->bigInteger('user_rating_total')->default(0);
            $table->text('profile_photo_src')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_reviews_profiles');
    }
};
