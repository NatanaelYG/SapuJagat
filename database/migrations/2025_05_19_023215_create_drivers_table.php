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
        Schema::create('drivers', function (Blueprint $table) {
            // $table->id('driver_id');
            $table->string('driver_id', 10)->primary();
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->boolean('status')->default(false)->nullable();
            $table->string('license_plate',12);
            $table->timestamps(); // wajib ditambah biar ada created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
