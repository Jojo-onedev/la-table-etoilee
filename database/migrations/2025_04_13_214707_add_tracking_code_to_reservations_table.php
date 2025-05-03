<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrackingCodeToReservationsTable extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('tracking_code')->unique()->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('tracking_code');
        });
    }
}