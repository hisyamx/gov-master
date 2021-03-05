<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggotas";

    protected $fillable = ['nama_anggota', 'nama_fraksi', 'agama', 'jenis_kelamin', 'jabatan_fraksi', 'komisi', 'jabatan_komisi', 'akd', 'jabatan_akd', 'dapil', 'foto',  'created_at', 'created_at'];
}
