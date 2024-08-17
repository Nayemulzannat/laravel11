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
            $table->string(column: 'title', length: 200);
            $table->string(column: 'short_des', length: 500);
            $table->string(column: 'price', length: 50);
            $table->boolean(column: 'discount');
            $table->string(column: 'discount_price', length: 50);
            $table->string(column: 'img', length: 200);
            $table->boolean(column: 'stock');
            $table->double(column: 'star');
            $table->enum('remark', ['populer', 'new', 'top', 'special', 'trending', 'regular']);

            // Relations manage this table to categories and  brands table

            $table->unsignedBigInteger(column: 'categories_id');
            $table->unsignedBigInteger(column: 'brands_id');

            $table->foreign(columns:'categories_id')->references(columns:'id')->on(table:'categories')->restrictOnUpdate()->cascadeOnUpdate();
            $table->foreign(columns:'brands_id')->references(columns:'id')->on(table:'brands')->restrictOnUpdate()->cascadeOnUpdate();


            $table->timestamp(column: 'created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
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
