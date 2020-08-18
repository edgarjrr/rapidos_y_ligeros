<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protein extends Model
{
    protected $fillable	= [ 
        'total_quantity',
        'food_id'
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
