<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{
    protected $fillable	= [ 
        'name',
        'image',
    ];

    protected $hidden = [ ];

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
