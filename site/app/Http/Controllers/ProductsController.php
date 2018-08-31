<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

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
        // Product::create($request->all());         
        // return redirect('product')->with('success', 'Information has been added');
    
        
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'prices' => 'required|numeric',
            'categories' => 'required',
            'file' => 'required'
        ],[
            // 'product_name.require' => 'Please',
            // 'product_description.require' => 'Please',
            // 'prices.require' => 'Please',
            // 'file.require' => 'Please'

            'required' => 'กรุณากรอก :attribute',
            'numeric' => 'กรุณากรอก :attribute เป็นตัวเลข',

        ]);
       
        $categories = $request->input('categories');   
        $product =  new Product;
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->prices = $request->input('prices');
        $product->save();
    
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);    
        $product->file = $filename;
        $product->save();

        $product->categories()->sync($categories);
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
        // dd($product->categories->pluck('id')->toArray()); 
        $product_category = $product->categories->pluck('id')->toArray();
        
        $categories = Category::all();
        return view('pages.editproduct', compact('product', 'id', 'categories', 'product_category'));
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
        // Product::where('id', $request->input('id'))->update($data);
        // $products = \App\Product::find($id);
        // $products->product_name=$request->get('product_name');
        // $products->product_description=$request->get('product_description');
        // $products->prices=$request->get('prices');        
        // $products->save();
        //$product = Product::where('id', $request->input('id'))->update($data);


        //$data['file'] = 
        //dd($data);

        

        $categories = $request->input('categories');
        $product = Product::find($id);
        $old_file = $product->file;
        $product->update($data);
        $upload_req = $request->file('file');
        $extension = $upload_req->extension();
        $basefilename = 'files/'.str_random(32);
        $filename = $basefilename.'.'.$extension;
        $request->file('file')->storeAs('public', $filename);
        Storage::disk('public')->delete($old_file); 
        $product->file = $filename; 
        $product->save();        
        
               
        $product->categories()->sync($categories);
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
        $products->categories()->detach();
        $products->delete();
        return redirect('product')->with('success','Information has been  deleted');
    }
}
