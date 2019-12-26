@extends('layouts.adminlayout.master')
@section('content')

    <div class="grid-form">
        <div class="grid-form1">
            <h3 id="forms-example" class="">Edit Item</h3>
            @include('admin.message')
            <form method ="POST" action = "{{route('item-update',$item->id)}}">
                {{csrf_field()}}


                <div class="form-group">

                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"@if(isset($item->category_id) && $item->category_id==$category->id)  selected @endif >{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" name="name"  value="{{ $item->name}}" placeholder="Item name">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" name="description"  value="{{ $item->description}}" placeholder="description">

                </div>
                <div class="form-group">

                    <input type="number" class="form-control" name="price" value="{{ $item->price}}" placeholder="Price">
                </div>

                <div class="form-group">

                    <input type="file" class="form-control" name="image" placeholder="Image"value="{{ $item->image}}">
                </div>
                <input type="submit" class="btn btn-default" value="update">
            </form>



@endsection
