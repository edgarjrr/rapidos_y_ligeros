<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPresentation extends Model
{
    protected $fillable	= [ 
        'name',
    ];

    protected $hidden = [ ];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
