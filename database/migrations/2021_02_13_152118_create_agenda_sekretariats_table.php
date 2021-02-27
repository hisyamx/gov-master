<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaSekretariatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_sekretariats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_agenda');
            $table->string('tempat');
            $table->string('durasi');
            $table->date('tanggal_buat');
            $table->date('tanggal_post');
            $table->string('peserta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_sekretariats');
    }
}
