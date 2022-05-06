<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aliment extends Model
{
    protected $fillable = [
    'FAMILLES', 'ALIMENTS', 'CALORIES','GLUCIDES','LIPIDES','QUANTITE'
     ];
}
