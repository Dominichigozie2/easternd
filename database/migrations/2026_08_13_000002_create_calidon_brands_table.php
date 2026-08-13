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
        Schema::create('calidon_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->nullable();
            $table->longText('description')->nullable();
            $table->string('fsize')->nullable();
            $table->string('fbottle')->nullable();
            $table->string('ssize')->nullable();
            $table->string('sbottle')->nullable();
            $table->string('tsize')->nullable();
            $table->string('tbottle')->nullable();
            $table->string('ftsize')->nullable();
            $table->string('ftbottle')->nullable();
            $table->string('fimage')->nullable();
            $table->string('simage')->nullable();
            $table->string('timage')->nullable();
            $table->string('ftimage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calidon_brands');
    }
};
