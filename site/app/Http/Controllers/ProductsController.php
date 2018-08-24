<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = \App\Product::all();
        
        // $products->each(function ($item, $key) {
        //     $item->status = 'show';
        // });  
     
        // foreach($products as $product)  {
        // dd($product->category->name);
        // }  

        return view('pages.product', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.createproduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        Product::create($request->all());         
        return redirect('product')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product  = \App\Product::find($id);      
        $categories = Category::all();
        return view('pages.editproduct', compact('product', 'id', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Product::update($request->all());
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        Product::where('id', $request->input('id'))->update($data);
        // $products = \App\Product::find($id);
        // $products->product_name=$request->get('product_name');
        // $products->product_description=$request->get('product_description');
        // $products->prices=$request->get('prices');        
        // $products->save();
        return redirect('product'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = \App\Product::find($id);
        $products->delete();
        return redirect('product')->with('success','Information has been  deleted');
    }
}
