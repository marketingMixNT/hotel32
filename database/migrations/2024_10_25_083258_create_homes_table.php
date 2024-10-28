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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->json('title');
            $table->text('logo');
            $table->text('phone');
            $table->text('phone_second')->nullable();
            $table->text('phone_third')->nullable();
            $table->text('mail');
            $table->text('address');
            $table->text('city');
            $table->text('bank')->nullable();
            $table->text('bank_account')->nullable();
            $table->json('booking_link');
            $table->text('booking_script');
            $table->text('map');
            $table->text('map_link');
            $table->json('slider_title');
            $table->json('slider_subtitle');
            $table->text('slider_images');
            $table->json('about_heading');
            $table->json('about_text_first');
            $table->json('about_text_second');
            $table->text('about_images');
            $table->json('rooms_heading');
            $table->json('rooms_text');
            $table->json('testimonials_heading');
            $table->json('testimonials_text');
            $table->json('attractions_heading');
            $table->json('attractions_text');
            $table->text('attractions_images');
            $table->text('google_reviews');
            $table->text('google_reviews_average');
            $table->text('google_reviews_link');
            $table->text('tripadvisor_reviews');
            $table->text('tripadvisor_reviews_average');
            $table->text('tripadvisor_reviews_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
