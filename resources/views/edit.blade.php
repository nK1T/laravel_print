<form method="Post" action="{{route('crud.update',$crud->id)}}"> 
@method('PATCH')
@csrf          
<label for="first_name">First Name:</label><br/>
<input type="text" class="form-control" name="first_name" value="{{$crud->first_name}}"><br/><br/>        
<label for="last_name">Last Name:</label><br/>
<input type="text" class="form-control" name="last_name" value="{{$crud->last_name}}"><br/><br/>      
<label for="gender">Gender:</label><br/>  
<input type="text" class="form-control" name="gender" value="{{$crud->gender}}"><br/><br/>        
<label for="age">Age:</label><br/>  
<input type="number" class="form-control" name="age" value="{{$crud->age}}"><br/><br/>  
<label for="yob">Year Of Birth:</label><br/> 
<input type="number" class="form-control" name="yob" value="{{$crud->yob}}"><br/><br/>  
<label for="father_name">Father Name:</label><br/>  
<input type="text" class="form-control" name="father_name" value="{{$crud->father_name}}"><br/><br/>  
<label for="roll_no">Roll No:</label><br/>  
<input type="number" class="form-control" name="roll_no" value="{{$crud->roll_no}}"><br/><br/>  
<label for="city">City:</label><br/>  
<input type="text" class="form-control" name="city" value="{{$crud->city}}"><br/><br/>  
<label for="state">State:</label><br/>  
<input type="text" class="form-control" name="state" value="{{$crud->state}}"><br/><br/> 
  
<button type="submit" class="btn-btn" >Update</button>  
</form>  
  
  
  