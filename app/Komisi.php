<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komisi extends Model
{
    protected $table = "komisis";

    protected $fillable = ['nama', 'fraksi', 'jabatan', 'komisi', 'tingkat',  'created_at', 'created_at'];
}
