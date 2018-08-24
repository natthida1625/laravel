@extends('layout.app')

@section('content')    
<div class="container">
      <h2>Contact US</h2><br/>
      <form method="post" action="{{ url('contact') }}" enctype="multipart/form-data">
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
              <label for="email">Email :</label>             
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="phone">Phone :</label>             
              <input type="text" class="form-control" name="phone">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="subject">Subject :</label>             
              <input type="text" class="form-control" name="subject">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="messages">Messages :</label>             
              <textarea class="form-control" name="messages" type="textarea" maxlength="140" rows="7"></textarea>
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