@include('layouts.adminlayout.master')
@section('content')

<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Add new category</h3>
 		<form method ="post" action = "{{url('submit')}}"> {{csrf_field()}}
  <div class="form-group">
   
    <input type="text" class="form-control"  name ="title"placeholder="title name">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="url"  placeholder="url">
  </div>
  <div class="form-group">
   
   <input type="message" class="form-control" name="details"  placeholder="details">
 </div>
  <input type="submit" class="btn btn-default" value="submit">
  </form>
</div>

@endsection