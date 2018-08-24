@extends('layout.app')

@section('content')
<h1> Contact US </h1>
<a href="{{ action('ContactController@create')}}">Send Messages</a><br /><br /> 
<div class="container">
<br />

    <!-- @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>        
        <th>Contact_ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>  
        <th>Subject</th>             
        <th>Messages</th>      
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>      
    @foreach($contacts as $contact)    
    <tr>
        <td>{{ $contact->id }}</td>       
        <td>{{ $contact->name }}</td>        
        <td>{{ $contact->email }}</td> 
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->subject }}</td>                  
        <td>{{ $contact->messages }}</td>            
        <td><a href="{{action('ContactController@edit', $contact->id )}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form method="post" action="{{action('ContactController@destroy', $contact->id )}}">
          @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> -->
  </div>
@endsection