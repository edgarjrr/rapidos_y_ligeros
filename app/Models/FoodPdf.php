<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodPdf extends Model
{
    protected $fillable	= [ 
        'url_pdf',
        'food_id',
    ];

    protected $hidden = [ ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
