@extends('layout.app')

@section('content')
<h1> Product List </h1>
<a href="{{ action('ProductsController@create')}}">Create Product</a><br /><br /> 
<div class="container">
<br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($products as $product)    
    <tr>
        <td>{{ $product->id }}</td>  
        <td>{{ $product->category->name }}</td>       
        <td>{{ $product->product_name }}</td>        
        <td>{{ $product->product_description }}</td>
        <td>{{ $product->prices }}</td>              
        <td><a href="{{action('ProductsController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form method="post" action="{{action('ProductsController@destroy', $product['id'])}}">
          @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection