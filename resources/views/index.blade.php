<h1>hello</h1>


<table>
<tr>
<th>id</th>
<th>name</th>
<th>address</th>
<th>file</th>
<th>Edit</th>
<th>Delete</th>
<th>UPdate</th>
</tr>
@foreach( $companies as $company)

<tr>
<td>{{ $company->id }}</td>
<td>{{ $company->name }}</td>
<td>{{ $company->address }}</td>
<td>{{ $company->file }}</td>

<td><a href ="{{url('edit')}}/{{($company->id)}}"><input type="button" value ='edit'></a></td>
<td><a href ="{{url('delete')}}/{{($company->id)}}"><input type="button" value ='delete'></a></td>
<td><input type="button" value ='update'></td>

</tr>

@endforeach
</table>