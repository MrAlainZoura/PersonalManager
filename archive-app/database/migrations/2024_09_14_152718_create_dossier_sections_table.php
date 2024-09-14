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
        Schema::create('dossier_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')
                ->constrained()
                ->noActionOnDelete()
                ->cascadeOnUpdate();
            $table->integer('section_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_sections');
    }
};
