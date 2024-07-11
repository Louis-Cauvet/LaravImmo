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
        Schema::create('favoris', function (Blueprint $table) {
            $table->id('id_favori');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_bienImmo');
            $table->timestamp('date_ajout')->useCurrent();
            $table->timestamps();

            $table->foreign('id_client')->references('id_client')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('id_bienImmo')->references('id_bienImmo')->on('biens_immo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoris');
    }
};
