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
        Schema::create('page_localization_blocks', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->json('text');
            $table->integer('sort')->nullable();
            $table->foreignId('page_localization_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_localization_blocks');
    }
};