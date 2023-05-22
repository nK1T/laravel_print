<link rel="stylesheet" href="/resources/css/app.css">
<table border="3px" cellspacing='7'>  
<thead>  
<tr>  
<td>  
ID </td>  
<td>  
First Name </td>  
<td>  
Last Name </td>  
<td>  
Gender </td>  
<td>  
Qualifications </td>  
<td colspan="2">  
Operations </td>  
</tr>  
</thead>  
<tbody>  
@foreach($cruds as $crud)  
        <tr border="none">  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->first_name}}</td>  
            <td>{{$crud->last_name}}</td>  
            <td>{{$crud->gender}}</td>  
            <td>{{$crud->qualifications}}</td>  
<td >  
<form action="{{ route('crud.destroy', $crud->id)}}" method="post">
  @method('DELETE')  
  @csrf
                  <button class ="btn" type="submit">Delete</button>  
                </form>  
</td>  
<td >  
<form action="{{ route('crud.edit', $crud->id)}}" method="GET">   
                  <button class = "btn" type="submit">Edit</button>  
                </form>  
</td>  
  
         </tr>  
@endforeach
</tbody>  
</table>  
