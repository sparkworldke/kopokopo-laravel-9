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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('home_about_description')->nullable();
            $table->longText('about_description')->nullable();
            $table->text('about_image')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            //seo
            $table->string('title',191)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
