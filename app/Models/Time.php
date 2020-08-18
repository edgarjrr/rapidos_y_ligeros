<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable	= [ 
        'name',
    ];

    protected $hidden = [ ];

    public function categories()
    {
        return $this->belongsToMany(FoodCategory::class);
    }
}
