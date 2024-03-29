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
        Schema::create('shared_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->unique();
            $table->string('slug',191)->unique();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->boolean('status')->default(true);


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
        Schema::dropIfExists('shared_pages');
    }
};
