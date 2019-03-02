<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $fillable = [
        'product_id',
        'product_image'

    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
