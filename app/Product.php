<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'store_id',
        'status',
        'description',
        'brand_id',
        'user_id',
        'price'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    }

    public function Brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function product_images()
    {
        return $this->hasMany('App\Product_image');
    }

    public function product_reviews()
    {
        return $this->hasMany('App\Product_review');
    }
}
