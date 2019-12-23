<html>
<body>

<form method="post" action="{{url('update', $company->id) }}">{{csrf_field()}}
Firstname<input type="text" name ="name" value="{{$company->name}}">
Address<input type="text" name ="address" value="{{$company->address}}">
Upload file<input type ="file" name="file" >
<input type ="submit" value="Update"></form>
</body>
</html>
<html






































