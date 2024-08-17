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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'img1', length: 200);
            $table->string(column: 'img2', length: 200);
            $table->string(column: 'img3', length: 200);
            $table->string(column: 'img4', length: 200);
            $table->longText(column: 'des');
            $table->string(column: 'color', length: 200);
            $table->string(column: 'size', length: 200);
            // Relations manage this table to products table

            $table->unsignedBigInteger(column: 'product_id')->unique();

            $table->foreign(columns:'product_id')->references(columns:'id')->on(table:'products')->restrictOnUpdate()->cascadeOnUpdate();


            $table->timestamp(column: 'created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
