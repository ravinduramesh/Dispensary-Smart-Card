<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billitem extends Model
{
    protected $fillable = [
        'id', 'bill_id', 'item_id', 'quantity', 'price'
    ];
}
