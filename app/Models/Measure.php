<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $fillable	= [ 
        'measure',
    ];

    protected $hidden = [ ];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
