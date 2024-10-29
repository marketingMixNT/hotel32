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
            $table->text('city');
            $table->text('address');
            $table->text('bank')->nullable();
            $table->text('bank_account')->nullable();
            $table->json('booking_link');
            $table->text('booking_script');
            $table->text('map');
            $table->text('map_link');
            $table->json('slider_title');
            $table->json('slider_subtitle');
            $table->text('slider_images');
            $table->json('rooms_heading');
            $table->json('rooms_text');
            $table->json('about_text_first');
            $table->text('about_image_first');
            $table->json('about_text_second')->nullable();
            $table->text('about_image_second')->nullable();
            $table->json('restaurant_text_first');
            $table->text('restaurant_image_first');
            $table->json('restaurant_text_second')->nullable();
            $table->text('restaurant_image_second')->nullable();
            $table->json('testimonials_heading');
            $table->json('testimonials_text');
            $table->text('google_reviews')->nullable();
            $table->text('google_reviews_average')->nullable();
            $table->text('google_reviews_link')->nullable();
            $table->text('tripadvisor_reviews')->nullable();
            $table->text('tripadvisor_reviews_average')->nullable();
            $table->text('tripadvisor_reviews_link')->nullable();
            $table->json('travel_heading');
            $table->json('travel_text');
            $table->text('travel_images');
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
