<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $fillable	= [ 
        'name',
        'description',
        'video',
    ];

    protected $hidden = [ ];

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }

    public function times()
    {
        return $this->belongsToMany(Time::class);
    }
}
