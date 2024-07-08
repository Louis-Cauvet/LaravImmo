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
        Schema::create('BienImmo', function (Blueprint $table) {
            $table->id('id_bienImmo');
            $table->string('titre_annonce');
            $table->text('contenu_annonce');
            $table->decimal('prix', 10, 2);
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postal', 10);
            $table->decimal('surface', 8, 2);
            $table->integer('nb_pieces');
            $table->integer('nb_chambres');
            $table->integer('nb_sdb');
            $table->boolean('achat');
            $table->boolean('neuf');
            $table->boolean('garage');
            $table->boolean('terrain');
            $table->boolean('disponible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BienImmo');
    }
};
