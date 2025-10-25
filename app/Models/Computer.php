<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    
    // Specify the correct table name
    protected $table = 'computers';

    // Specify which fields can be mass assigned
    protected $fillable = [
        'name',
        'origin',
        'price',
        'date_release'
    ];
}
