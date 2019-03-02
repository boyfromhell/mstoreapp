<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businesstype extends Model
{
    protected $fillable = [
        'name'
    ];

    public function stores()
    {
        return $this->hasMany('App\Store');
    }
}
