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
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();

            $table->string(column: 'description', length: 1000);

            // Relations manage  table
            $table->string(column: 'profiles_email', length: 50);
            $table->unsignedBigInteger(column: 'product_id');

            $table->foreign(columns: 'profiles_email')->references(columns: 'users_email')->on(table: 'profiles')->restrictOnUpdate()->cascadeOnUpdate();

            
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
        Schema::dropIfExists('product_reviews');
    }
};
