<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodVideo extends Model
{
    protected $fillable	= [ 
        'url_video',
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
