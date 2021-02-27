<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fraksi extends Model
{
    protected $table = "fraksis";

    protected $fillable = ['fraksi_name', 'fraksi_foto', 'created_at', 'created_at'];
}
