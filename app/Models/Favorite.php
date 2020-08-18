<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable	= [ 
        'id_nut', 
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
