@extends('layouts.adminlayout.master')
@section('content')

<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Add new Item</h3>
            @include('admin.message')
 		<form method ="POST" action = "{{url('saved')}}" enctype="multipart/form-data" >
            {{csrf_field()}}
  <div class="form-group">

  <select class="form-control" name="category_id">
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->title }}</option>
       @endforeach
        </select>
  </div>
  <div class="form-group">

    <input type="text" class="form-control" name="name"  placeholder="Item name">
  </div>
  <div class="form-group">

   <input type="text" class="form-control" name="description"  placeholder="description">

 </div>
 <div class="form-group">

   <input type="number" class="form-control" name="price"  placeholder="Price">
 </div>

 <div class="form-group">

   <input type="file" class="form-control" name="image"  placeholder="Image">
 </div>
 <input type="submit" class="btn btn-default" value="submit">
 </form>



@endsection
