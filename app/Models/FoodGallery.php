<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodGallery extends Model
{
    protected $fillable	= [ 
        'image',
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
