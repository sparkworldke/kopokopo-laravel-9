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
        Schema::create('book_orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id',191)->unique();
            $table->string('name',191);
            $table->string('email',191);
            $table->string('payer_email',191)->nullable();
            $table->string('payer_id',191)->nullable();
            $table->text('payment_comment')->nullable();
            $table->string('phone_number',191);
            $table->integer('status')->default(0);
            $table->integer('payment_status')->default(0);
            $table->text('transaction_id')->nullable();
            $table->integer('amount')->nullable();
            $table->float('admin_amount', 8, 2)->nullable();
            $table->float('user_amount', 8, 2)->nullable();
            $table->text('payment_method')->nullable();
            $table->text('narrative')->nullable();
            $table->text('narrative_description')->nullable();
            $table->timestamp('payment_date')->nullable();
            $table->text('country')->nullable();
            $table->foreignIdFor(\App\Models\BookResource::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->timestamp('date_attended')->nullable();
            $table->text('user_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_orders');
    }
};
