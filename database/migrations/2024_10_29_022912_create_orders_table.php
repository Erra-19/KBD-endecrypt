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
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('menu_order_id');
            $table->foreign('staff_id')->references('staff_id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('menu_order_id')->references('id')->on('menu_orders');
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
