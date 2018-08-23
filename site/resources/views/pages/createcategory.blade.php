@extends('layout.app')

@section('content')    
<div class="container">
      <h2>Create New Category</h2><br/>
      <form method="post" action="{{ url('category') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description :</label>             
              <textarea class="form-control" name="description" type="textarea" maxlength="140" rows="7"></textarea>
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