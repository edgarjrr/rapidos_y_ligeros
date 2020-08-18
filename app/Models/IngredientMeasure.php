<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngredientMeasure extends Model
{
    protected $fillable	= [ 
        'measure',
    ];

    protected $hidden = [ ];
}
