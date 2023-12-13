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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('company');
            $table->string('departure_station', 100);
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_code')->unique();
            $table->tinyInteger('currage_number')->unique();
            $table->time('in_time');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
