@extends('layouts.adminlayout.master')
@section('content')
    @include('admin.message')
<div>
<table class="table table-dark" >

    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
        <th scope="col">Action</th>
      </tr>

      @foreach( $items as $item)
    <tr>
 <td>{{ $item->id }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->description }}</td>
<td>{{ $item->price }}</td>
<td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/item/'.$item->image) }}" style="height: 100px; width: 100px" alt=""></td>
<td>{{ $item->created_at }}</td>
 <td>{{ $item->updated_at }}</td>

<td><a href ="{{url('item-edit')}}/{{($item->id)}}"><button type="button" class="btn btn-info">edit</button></td>
<td><a href ="{{url('item-delete')}}/{{($item->id)}}"><button type="button" class="btn btn-danger">delete</button></td>

    </tr>

  @endforeach
</table>
</div>
@endsection
