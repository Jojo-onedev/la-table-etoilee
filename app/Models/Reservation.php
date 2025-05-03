<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function up(): void {
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->date('date');
        $table->string('time');
        $table->integer('guests');
        $table->text('notes')->nullable();
        $table->string('tracking_code')->unique();
        $table->enum('status', ['En attente', 'Acceptée', 'Refusée'])->default('En attente');
        $table->timestamps();
    });
}

    protected $fillable = [
        'name', 'email', 'phone', 'date', 'time', 'guests', 'notes', 'tracking_code', 'status'
    ];


}
