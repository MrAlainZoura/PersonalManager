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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('email');
            $table->string('genre');
            $table->date('date_naissance');
            $table->date('date_engagement')->nullable();
            $table->string('fonction')->nullable();
            $table->string('grade')->nullable();
            $table->string('statut')->nullable();
            $table->foreignId('service_id')
                ->references('id')
                ->on('services')
                ->constrained()
                ->noActionOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
