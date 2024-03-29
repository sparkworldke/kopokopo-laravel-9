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
        Schema::create('ad_sections', function (Blueprint $table) {
            $table->id();
            //type
            $table->string('name');
            $table->string('adtype');
            $table->longText('ad_content')->nullable();
            $table->integer('ad_position');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('ad_link')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_sections');
    }
};
