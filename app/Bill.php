<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'address', 'male', 'dob', 'nic', 'blood_group', 'contact'
    ];
}
