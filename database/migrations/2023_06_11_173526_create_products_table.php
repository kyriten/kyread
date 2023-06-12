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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('harga');
            $table->string('weight');
            $table->string('slug')->unique();
            $table->string('excerpt');
            $table->foreignId('category_id');
            $table->string('stock');
            $table->string('sold');
            $table->timestamp('sale_date');
            $table->timestamp('stock_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
