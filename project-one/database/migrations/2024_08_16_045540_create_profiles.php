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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'first_name', length: 50);
            $table->string(column: 'last_name', length: 50);
            $table->string(column: 'mobile', length: 50);
            $table->string(column: 'city', length: 50);
            $table->string(column: 'shipping_address', length: 1000);
            $table->string(column:'users_email',length:50)->unique();

            // Relations manage this table to user table

            $table->foreign(columns:'users_email')->references(columns:'email')->on(table:'users')->restrictOnUpdate()->cascadeOnUpdate();


            $table->timestamp(column: 'created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
