@extends('layouts.adminlayout.master')
@section('content')
    @include('admin.message')
<div>
<table class="table table-dark" >

    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">url</th>
      <th scope="col">Details</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      </tr>

      @foreach( $categories as $category)
    <tr>
 <td>{{ $category->id }}</td>
<td>{{ $category->title }}</td>
<td>{{ $category->url }}</td>
<td>{{ $category->details }}</td>

<td><a href ="{{url('category-edit')}}/{{($category->id)}}"><button type="button" class="btn btn-info">edit</button></td>
<td><a href ="{{url('category-delete')}}/{{($category->id)}}"><button type="button" class="btn btn-danger">delete</button></td>

    </tr>

  @endforeach
</table>
</div>
@endsection
