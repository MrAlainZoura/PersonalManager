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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->constrained()
                ->noActionOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('section_id')
                ->references('id')
                ->on('sections')
                ->constrained()
                ->noActionOnDelete()
                ->cascadeOnUpdate();
            $table->string('libele');
            $table->longText('description');
            $table->string('date_creation');
            $table->string('statut')->nullable();
            $table->string('date_fermeture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
