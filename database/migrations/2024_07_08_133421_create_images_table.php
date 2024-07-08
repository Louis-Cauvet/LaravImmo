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
        Schema::create('Image', function (Blueprint $table) {
            $table->id('id_image');
            $table->unsignedBigInteger('id_bien');
            $table->string('image_data');
            $table->timestamps();

            $table->foreign('id_bien')->references('id_bienImmo')->on('BienImmo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Image');
    }
};
