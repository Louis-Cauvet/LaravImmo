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
        Schema::create('Images', function (Blueprint $table) {
            $table->id('id_image');
            $table->unsignedBigInteger('id_bien');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('id_bien')->references('id_bienImmo')->on('biens_immo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Images', function (Blueprint $table) {
            // Supprimer la clé étrangère avant de supprimer la table
            $table->dropForeign(['id_bien']);
        });

        Schema::dropIfExists('Images');
    }
};
