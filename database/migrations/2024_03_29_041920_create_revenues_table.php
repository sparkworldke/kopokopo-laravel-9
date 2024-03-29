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
        Schema::create('revenues', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\BookOrder::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('admin_amount', 8, 2)->nullable();
            $table->float('user_amount', 8, 2)->nullable();
            $table->float('current_amount', 8, 2)->nullable();
            $table->dateTime('current_date')->nullable(); //deposit or withdrawal
            $table->string('transaction_type')->nullable(); // purchase or withdrawl
            $table->integer('status')->default(1); // 1 deposit or 2 Withdrwa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenues');
    }
};
