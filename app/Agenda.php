<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agendas";

    protected $fillable = ['nama_agenda', 'tempat', 'durasi', 'tanggal_buat', 'tanggal_post', 'peserta', 'created_at', 'created_at'];
}
