<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;


class Product extends Model
{
    protected $fillable = ['product_name', 'product_description', 'prices', 'file'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');    }

    
    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }
}
