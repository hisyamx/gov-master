<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('judul');
            $table->longText('slug');
            $table->longText('tags');
            $table->longText('author');
            $table->date('tanggal_buat');
            $table->date('tanggal_post');
            $table->longText('deskripsi');
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
        Schema::dropIfExists('agenda_blogs');
    }
}
