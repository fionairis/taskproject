@extends('layouts.adminlayout.master')
@section('content')
<div>
<table class="table table-dark" >
  
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>   
      <th scope="col">Delete</th> 
      </tr>

      @foreach( $contacts as $contact)
    <tr>
     
 <td>{{ $contact->id }}</td>
<td>{{ $contact->first_name }}</td>
<td>{{ $contact->last_name }}</td>
<td>{{ $contact->email }}</td>
<td>{{ $contact->subject }}</td>
<td>{{ $contact->message }}</td>
<td><a href ="{{url('delete')}}/{{($contact->id)}}"><button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    
  @endforeach
</table>
</div>
@endsection