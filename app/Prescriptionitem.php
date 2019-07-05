<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptionitem extends Model
{
    protected $fillable = [
        'id', 'prescription_id', 'item_id', 'quantity'
    ];
}
