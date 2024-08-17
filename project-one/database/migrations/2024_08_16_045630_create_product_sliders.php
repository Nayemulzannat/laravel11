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
        Schema::create('product_sliders', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title', length: 200);
            $table->string(column: 'short_des', length: 500);
            $table->string(column: 'img', length: 200);

            // Relations manage this table to products table

            $table->unsignedBigInteger(column: 'product_id')->unique();

            $table->foreign(columns: 'product_id')->references(columns: 'id')->on(table: 'products')->restrictOnUpdate()->cascadeOnUpdate();


            $table->timestamp(column: 'created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sliders');
    }
};
