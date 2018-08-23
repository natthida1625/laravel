@extends('layout.app')

@section('content') 
<div class="container">
      <h2>Edit Category</h2><br  />
        <form method="post" action="{{action('CategoryController@update' , $id)}}">
        @csrf
        <input name="id" type="hidden" value="{{ $category->id }}">
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <textarea class="form-control" name="description" type="textarea" maxlength="140" rows="7">{{$category->description}}</textarea>
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