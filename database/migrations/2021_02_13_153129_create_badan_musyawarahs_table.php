<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadanMusyawarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badan_musyawarahs', function (Blueprint $table) {
            $table->longText('title');
            $table->longText('description');
            $table->longText('nama');
            $table->longText('fraksi');
            $table->longText('jabatan');
            $table->longText('komisi');
            $table->longText('tingkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badan_musyawarahs');
    }
}
