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
        Schema::create('about_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('afimage')->nullable();
            $table->string('asimage')->nullable();
            $table->string('atimage')->nullable();
            $table->string('aftimage')->nullable();
            $table->string('afthimage')->nullable();
            $table->string('asximage')->nullable();
            $table->string('asvimage')->nullable();
            $table->string('aetimage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_galleries');
    }
};
