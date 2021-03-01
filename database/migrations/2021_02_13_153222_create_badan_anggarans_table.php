<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadanAnggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badan_anggarans', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longText('description');
            $table->longText('nama');
            $table->longText('fraksi');
            $table->longText('jabatan');
            $table->longText('komisi');
            $table->longText('tingkat');
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
        Schema::dropIfExists('badan_anggarans');
    }
}
