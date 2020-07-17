<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuatePromos extends Model
{
    protected $fillable = [
        'title', 'price', 'address', 'latitude', 'longitude'
    ];
}
