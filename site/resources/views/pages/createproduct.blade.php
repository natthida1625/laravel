@extends('layout.app')

@section('content')    
<div class="container">
      <h2>Create New Product</h2><br/>
      <form method="post" action="{{ url('product') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="product_name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description :</label>             
              <textarea class="form-control" name="product_description" type="textarea" maxlength="140" rows="7"></textarea>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price :</label>
              <input type="text" class="form-control" name="prices">
            </div>
          </div>      
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <lable for="category">Category :</lable>
                <select name="category_id">
                @foreach($categories as $category)                
                  <option value="{{ $category->id }}">{{ $category->name }}</option>    
                @endforeach               
                </select>
            </div>
        </div>  
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>        
      </form>
    </div>
@endsection        
   