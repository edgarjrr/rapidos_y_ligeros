<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable	= [ 
        'id_nut', 
        'comment',  
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
