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
        Schema::create('Alertes_clients', function (Blueprint $table) {
            $table->id('id_alerte');
            $table->unsignedBigInteger('id_client');
            $table->string('titre_alerte');
            $table->text('contenu_alerte');
            $table->timestamps();

            $table->foreign('id_client')->references('id_client')->on('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Alertes_clients');
    }
};
