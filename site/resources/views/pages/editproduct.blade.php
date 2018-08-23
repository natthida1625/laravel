@extends('layout.app')

@section('content') 
<div class="container">
      <h2>Edit Product</h2><br  />
        <form method="post" action="{{action('ProductsController@update' , $id)}}">
        @csrf
        <input name="id" type="hidden" value="{{ $product->id }}">
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <textarea class="form-control" name="product_description" type="textarea" maxlength="140" rows="7">{{$product->product_description}}</textarea>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="prices" value="{{$product->prices}}">
            </div>
          </div> 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Save</button>
          </div>
        </div>
        
      </form>
    </div>
@endsection        