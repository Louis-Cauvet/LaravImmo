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
        Schema::create('Demandes_Contact', function (Blueprint $table) {
            $table->id('id_demande');
            $table->string('nom_demandeur');
            $table->string('prenom_demandeur');
            $table->string('mail_demandeur');
            $table->text('contenu_demande')->nullable();
            $table->unsignedBigInteger('id_bienImmo')->nullable();
            $table->foreign('id_bienImmo')->references('id_bienImmo')->on('Biens_Immo')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Demandes_Contact');
    }
};
