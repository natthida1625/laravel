<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductTypeController extends Controller
{
    public function index() {
        $products = Product::get();
        return view ('ProductType.main', ['products' => $products ]);
    }
}
