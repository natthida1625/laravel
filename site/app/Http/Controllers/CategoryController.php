<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categorys = \App\Category::all();
        // $categorys->each(function ($item, $key) {
        //     $item->status = 'show';
        // });        
        // return view('pages.category',compact('categorys'));
        
       $categories = \App\Category::all();
 
        // $category = Category::find(1)->products->count();
        // dd($category);
        // $products = \App\Product::where('category_id', $category->id)->get();
        // $category->product_count = $products->count();
        // dd($category);

        return view('pages.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createcategory');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());    
        return redirect('category')->with('success', 'Information has been added');
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
        $category = \App\Category::find($id);
        return view('pages.editcategory',compact('category','id'));    }

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
        Category::where('id', $request->input('id'))->update($data);
        // $products = \App\Product::find($id);
        // $products->product_name=$request->get('product_name');
        // $products->product_description=$request->get('product_description');
        // $products->prices=$request->get('prices');        
        // $products->save();
        return redirect('category');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::find($id);
        $category->delete();
        return redirect('category')->with('success','Information has been  deleted');
    }
}
