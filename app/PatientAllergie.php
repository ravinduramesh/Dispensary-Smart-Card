<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientAllergie extends Model
{
    protected $fillable = [
        'user_id' , 'allergy_id'
    ];
}
