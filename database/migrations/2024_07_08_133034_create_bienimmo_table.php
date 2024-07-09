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
        Schema::create('Biens_Immo', function (Blueprint $table) {
            $table->id('id_bienImmo');
            $table->unsignedBigInteger('typeBien_id');
            $table->string('titre_annonce');
            $table->text('contenu_annonce');
            $table->decimal('prix', 10, 2);
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postal', 10);
            $table->integer('surface');
            $table->integer('nb_pieces');
            $table->integer('nb_chambres');
            $table->integer('nb_sdb');
            $table->boolean('achat');
            $table->boolean('neuf');
            $table->boolean('garage');
            $table->boolean('terrain');
            $table->boolean('disponible')->default(true);
            $table->timestamps();

            $table->foreign('typeBien_id')->references('id_typeBien')->on('types_biens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Biens_Immo', function (Blueprint $table) {
            $table->dropForeign(['typeBien_id']);
        });
        Schema::dropIfExists('Biens_Immo');
    }
};
