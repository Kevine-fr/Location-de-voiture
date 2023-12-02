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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('modele_id');
            $table->date('annee');
            $table->string('statut')->default('disponible');
            $table->string('plaque_immatriculation');
            $table->boolean('siege_auto')->default(false);
            $table->boolean('location_semaine')->default(false);
            $table->boolean('location_mois')->default(false);
            $table->boolean('gasoil')->default(false);
            $table->boolean('essence')->default(false);
            $table->timestamps();

            $table->foreign('marque_id')->references('id')->on('marques');
            $table->foreign('modele_id')->references('id')->on('modeles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
