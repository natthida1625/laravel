<?php

namespace App;
    
use Illuminate\Database\Eloquent\Model;
use App\Product;

    
class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function Products()
    {
        return $this->belongsToMany('App\Product');
    }
       
}
