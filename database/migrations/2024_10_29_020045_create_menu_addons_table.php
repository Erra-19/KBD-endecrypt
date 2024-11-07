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
        Schema::create('menu_addons', function (Blueprint $table) {
            $table->id('addon_id');
            $table->unsignedBigInteger('menu_id');
            $table->string('addon_image')->nullable();
            $table->string('addon_name');
            $table->unsignedBigInteger('menu_category_id');
            $table->decimal('addon_price', 10, 2);

            // Foreign key constraints
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('menu_category_id')->references('id')->on('menu_categories')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_addons');
    }
};
