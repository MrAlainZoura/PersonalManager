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
        Schema::create('communiques', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('objet');
            $table->string('concerne');
            $table->longText('contenu');
            $table->string('auteur_nom');
            $table->string('auteur_fonction');
            $table->integer('auteur_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communiques');
    }
};
