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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom complet
            $table->string('email');
            $table->string('phone')->nullable();
            $table->date('date');
            $table->time('time');
            $table->unsignedTinyInteger('guests'); // nombre de personnes
            $table->text('notes')->nullable(); // demandes spéciales
            $table->enum('status', ['En attente', 'Acceptée', 'Refusée'])->default('En attente'); // statut de la réservation
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
