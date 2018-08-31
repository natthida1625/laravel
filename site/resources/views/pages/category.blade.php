@extends('layout.app')

@section('content')
<h1> Category List </h1>
<a href="{{ action('CategoryController@create')}}">Create Category</a><br /><br /> 
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
        <th>Category_ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Count_Products</th>             
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>      
    @foreach($categories as $category)    
    <tr>
        <td>{{ $category->id }}</td>       
        <td>{{ $category->name }}</td>        
        <td>{{ $category->description }}</td> 
        <td>{{ $category->products()->count() }}</td> 
        <td><a href="{{action('CategoryController@edit', $category->id )}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form method="post" action="{{action('CategoryController@destroy', $category->id )}}">
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