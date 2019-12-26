@extends('layouts.adminlayout.master')
@section('content')


<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Edit category</h3>
 		<form method ="post" action = "{{url('category-update',$category->id)}}">{{csrf_field()}}
  <div class="form-group">
   
    <input type="text" class="form-control"  name ="title" value ="{{$category->title}}"placeholder="title name">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control"  name ="url" value="{{$category->url}}"  placeholder="url">
  </div>
  <div class="form-group">
   
   <input type="text" class="form-control"name ="details" value="{{$category->details}}"  placeholder="details">

 </div>
 <input type="submit" class="btn btn-default" value="update">
 </form>

 

@endsection