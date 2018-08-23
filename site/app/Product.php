<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_description', 'prices', 'category_id'];    

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }
}
