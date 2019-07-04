<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorie extends Model
{
    
    protected $fillable = [
        'Name','Unit_Price','Quantity'
    ];
}
