<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_review extends Model
{
    protected $fillable = [
        'product_id',
        'star',
        'description'
    ];
}
