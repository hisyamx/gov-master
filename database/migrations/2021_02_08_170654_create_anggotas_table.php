<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('nama_fraksi');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('jabatan_fraksi');
            $table->string('komisi');
            $table->string('jabatan_komisi');
            $table->string('akd');
            $table->string('jabatan_akd');
            $table->string('dapil');
            $table->string('foto');

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
        Schema::dropIfExists('anggotas');
    }
}
