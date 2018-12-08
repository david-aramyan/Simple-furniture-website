<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function startingPrice()
    {
        if(count($this->products) > 0) {
            return $this->products()->orderBy('price', 'desc')->first()->price;
        }
        return 4990;
    }
}
