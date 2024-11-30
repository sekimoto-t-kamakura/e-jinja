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
        Schema::create('shirines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('area_id')->constrained('areas');
            $table->foreignId('prefecture_id')->constrained('prefectures');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('condition_id')->constrained('conditions');
            $table->foreignId('nearest_station_id')->constrained('nearest_stations');
            $table->string('access_minute');
            $table->foreignId('god_id')->constrained('gods');
            $table->foreignId('profit_id')->constrained('profits');
            $table->text('origin');
            $table->string('january');
            $table->string('february');
            $table->string('march');
            $table->string('april');
            $table->string('may');
            $table->string('june');
            $table->string('july');
            $table->string('august');
            $table->string('september');
            $table->string('october');
            $table->string('novenber');
            $table->string('december');
            $table->string('url');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shirine');
    }
};
