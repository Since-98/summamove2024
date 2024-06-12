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
        Schema::create('prestatie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gebruiker_id')->constrained();
            $table->foreignId('oefeningen_id')->constrained(); // Fix foreign key constraint name here
            $table->integer('score');
            $table->dateTime('datum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestaties');
    }
};
