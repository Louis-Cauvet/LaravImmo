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
        Schema::create('Recherches', function (Blueprint $table) {
            $table->id('id_recherche');
            $table->date('date_enregistrement_recherche');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_typeBien');
            $table->boolean('achat');
            $table->string('mots_cles')->nullable();
            $table->string('ville')->nullable();
            $table->decimal('budget_min', 10, 2)->nullable();
            $table->decimal('budget_max', 10, 2)->nullable();
            $table->foreign('id_client')->references('id_client')->on('Utilisateurs')->onDelete('cascade');
            $table->foreign('id_typeBien')->references('id_typeBien')->on('Types_Biens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Recherches');
    }
};
