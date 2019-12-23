
<div class="col-md-6">
					<div class="contact_form">
					@foreach($errors->all() as $error)
        {{$error}}
        @endforeach
        <div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Basic Form</h3>
 		<form method ="post" action = "{{url('submit')}}"> {{csrf_field()}}
  <div class="form-group">
   
    <input type="text" class="form-control"  name ="title"placeholder="title name">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="url"  placeholder="url">
  </div>
  <div class="form-group">
   
   <input type="text" class="form-control" name="details"  placeholder="url">
 </div>
  <input type="submit" class="btn btn-default" value ="submit">
</form>
</div>
</form>