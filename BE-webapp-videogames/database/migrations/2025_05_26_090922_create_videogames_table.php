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

        Schema::create('videogames', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('developers')->nullable();
            $table->string('genre');
            $table->date('release_date')->nullable();
            
            $table->decimal('price', 8, 2);
            $table->longText('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videogames');
    }
};
