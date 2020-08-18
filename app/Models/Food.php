<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable	= [ 
        'name', 
        'price',
        'box_price', 
        'diet_name',
        'package_number', 
        'piece_package',
        'kcal', 
        'portion',
        'portion_nutricionsas', 
        'nutritional_table_image',
        'nutritional_table', 
        'strategies',
        'rules', 
        'exaggerate',
        'risks', 
        'generals',
        'equivalent', 
        'preparation',
        'keywords', 
        'valid_fields',
        'validated', 
        'id_nut',
        'restaurant_price', 
        'preparation_time',
        'difficulty', 
        'portability',
        'nutritionist_name',
        'product_presentation_id', 
        'measure_id',
    ];

    protected $hidden = [ ];

    public function measure()
    {
        return $this->belongsTo(Measure::class);
    }

    public function product_presentation()
    {
        return $this->belongsTo(ProductPresentation::class);
    }

    public function carbohydrates()
    {
        return $this->hasOne(Carbohydrate::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function fats()
    {
        return $this->hasOne(Fat::class);
    }

    public function nut_favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function food_categories()
    {
        return $this->belongsToMany(FoodCategory::class);
    }

    public function gallery()
    {
        return $this->hasMany(FoodGallery::class);
    }

    public function pdfs()
    {
        return $this->hasMany(FoodPdf::class);
    }

    public function videos()
    {
        return $this->hasMany(FoodVideo::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->with('ingredients_measures');
    }

    public function proteins()
    {
        return $this->hasOne(Protein::class);
    }

    public function supermarkets()
    {
        return $this->belongsToMany(Supermarket::class);
    }

}
