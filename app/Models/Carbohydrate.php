<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carbohydrate extends Model
{
    protected $fillable	= [ 
        'total_quantity', 
        'simple', 
        'complex', 
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
