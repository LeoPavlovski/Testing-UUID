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
        Schema::create('orders', function (Blueprint $table) {
            //custom uuid
         $table->uuid('order_id');
         $table->foreignId('phone_id')->constrained('phones');
         $table->foreignId('user_id')->constrained('users');
         $table->integer('quantity');
         $table->float('tax');
         $table->float('subtotal');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
