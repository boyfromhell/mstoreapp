<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'type',
        'user_id',
        'name',
        'phoneno',
        'address',
        'email',
        'city',
        'state',
        'zip_code',
        'country',
        'lat',
        'lng',
        'bussinesstype_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function businesstype()
    {
        return $this->belongsTo('App\Businesstype');
    }
}
