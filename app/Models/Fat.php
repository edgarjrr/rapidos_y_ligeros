<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fat extends Model
{
    protected $fillable	= [ 
        'total_quantity', 
        'saturated_fats',  
        'unsaturated_fats',
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
