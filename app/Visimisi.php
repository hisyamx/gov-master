<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $table = "visimisi";
    protected $fillable = [
        'title','descriptionvisi', 'descriptionmisi'
    ];
}
