<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{

    // id	allergy	detail	
    protected $fillable = [
        'allergy', 'detail'
    ];
}
