<html>
<body>			
<form method="post" action="{{url('submit')}}">{{csrf_field()}}
Firstname<input type="text" name ="name"><br>
Address<input type="text" name ="address"><br>
Upload file<input type ="file" name="file" >
<input type ="submit"></form>
<div><ul>
@foreach($errors->all() as $error)
     <li>   {{$error}}</li>
        @endforeach
</ul></div>
</body>
</html>