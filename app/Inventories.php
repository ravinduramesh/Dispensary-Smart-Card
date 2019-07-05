<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{
    protected $fillable = [
        'name', 'unit_price', 'quantity'
    ];
}
