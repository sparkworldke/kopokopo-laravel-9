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
        Schema::create('book_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->unique();
            $table->string('slug',191)->unique();
            $table->text('description')->nullable();
            //pricing
            $table->integer('price')->nullable();
            $table->integer('offer_price')->nullable();
            $table->dateTime('offer_end_dates')->nullable();
            $table->longText('gallery')->nullable();
            $table->integer('views')->default(0);

            //file
            $table->longText('file')->nullable();
            $table->longText('file_type')->nullable();
            $table->longText('file_size')->nullable();
            $table->longText('file_pages')->nullable();
            $table->integer('status')->default(2); //0 Draft, 1 Approved, 2 Pending Approval
            //file owner and author
            $table->longText('author')->nullable();

            //foreign Keys
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Category::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Course::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\EducationLevel::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Term::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            //SEO
            $table->text('meta_description')->nullable();
            $table->text('keywords')->nullable();
            $table->longText('image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_resources');
    }
};
