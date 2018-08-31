@extends('layout.app')

@section('content')    
<div class="container">
  <h2>Create New Product</h2><br/>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post" action="{{ url('product') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('product_name') ? 'has-error' : '' }}">
          <label class="control-label" for="name">Name:</label>
          <input type="text" class="form-control" name="product_name">            
          @if($errors->has('product_name'))
            <span class="help-block">{{ $errors->first('product_name') }}</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('product_description') ? 'has-error' : '' }}">
          <label class="control-label" for="description">Description:</label>
          <textarea class="form-control" name="product_description" type="textarea" maxlength="140" rows="7"></textarea>
          @if($errors->has('product_description'))
            <span class="help-block">{{ $errors->first('product_description') }}</span>
          @endif
        </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('prices') ? 'has-error' : '' }}">
          <label class="control-label" for="price">Price :</label>
          <input type="text" class="form-control" name="prices">
          @if($errors->has('prices'))
            <span class="help-block">{{ $errors->first('prices') }}</span>
          @endif
        </div>
    </div> 

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('categories') ? 'has-error' : '' }}">
          <label class="checkbox" for="category">Category :</label>
            <!-- <select name="category_id">
            @foreach($categories as $category)                
              <option value="{{ $category->id }}">{{ $category->name }}</option>    
            @endforeach               
            </select> -->            
          <div>
            @foreach($categories as $category)    
            <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->name }}  
            <br />                           
            @endforeach
          </div>  
            @if($errors->has('categories'))
              <span class="help-block">{{ $errors->first('categories') }}</span>
            @endif
        </div>                
    </div>  

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4 {{ $errors->has('file') ? 'has-error' : '' }}">
          <label class="control-label" for="images">Images :</label>
          <input type="file" id="file" class="form-control" name="file">
          @if($errors->has('file'))
            <span class="help-block">{{ $errors->first('file') }}</span>
          @endif
      </div>
    </div> 

    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
          <button type="submit"  class="btn btn-success" style="margin-left:38px">Save</button>
        </div>
      </div> 
    </form>
  </div>    
@endsection        
   