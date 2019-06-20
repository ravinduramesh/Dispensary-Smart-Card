<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventorie extends Model
{
    protected $fillable = [
        'Name',
        'Unit_Price',
        'Quantity',
    ];
}
