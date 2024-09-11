<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('tx_ref')->unique();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 10);
            $table->string('status');
            $table->string('customer_email');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('choice');
            $table->string('frequency');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
