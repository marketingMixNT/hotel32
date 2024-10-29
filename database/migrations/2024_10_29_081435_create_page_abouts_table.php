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
        Schema::create('page_abouts', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->json('header_heading');
            $table->json('heading');
            $table->text('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_abouts');
    }
};
