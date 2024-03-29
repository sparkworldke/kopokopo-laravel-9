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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->nullable();

            //custom scripts
            $table->text('header_scripts')->nullable();
            $table->text('body_scripts')->nullable();
            $table->text('footer_scripts')->nullable();
            //social
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('google_my_business')->nullable();
            $table->text('direction_on_map')->nullable();
            $table->text('image')->nullable();
            //address
            $table->text('address')->nullable();
            $table->text('address_backup')->nullable();
            $table->string('phone_number',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('email_backup',191)->nullable();
            $table->string('email_backup_one',191)->nullable();
            $table->string('phone_number_backup',191)->nullable();
            $table->string('phone_number_backup_one',191)->nullable();
            $table->string('whatsapp',191)->nullable();
            $table->string('whatsapp_backup',191)->nullable();
            $table->string('whatsapp_backup_one',191)->nullable();
            //branches 2
            $table->text('branch_one_address')->nullable();
            $table->string('branch_one_phone_number',191)->nullable();
            $table->string('branch_one_email',191)->nullable();
            $table->string('branch_one_email_backup',191)->nullable();
            $table->string('branch_one_phone_number_backup',191)->nullable();
            $table->string('branch_one_whatsapp',191)->nullable();
            $table->string('branch_one_whatsapp_backup',191)->nullable();

            //logos
            $table->text('logo')->nullable();
            $table->text('light_logo')->nullable();
            $table->text('favicon')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
