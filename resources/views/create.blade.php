<form  action ="{{route('crud.store')}}" method="post">  
@csrf          
<label for="first_name">First Name:</label><br/>
<input type="text" class="form-control" name="first_name"/><br/><br/>        
<label for="last_name">Last Name:</label><br/>
<input type="text" class="form-control" name="last_name"/><br/><br/>      
<label for="gender">Gender:</label><br/>  
<input type="text" class="form-control" name="gender"/><br/><br/>        
<label for="age">Age:</label><br/>  
<input type="number" class="form-control" name="age"/><br/><br/>  
<label for="yob">Year Of Birth:</label><br/> 
<input type="number" class="form-control" name="yob"/><br/><br/>  
<label for="father_name">Father Name:</label><br/>  
<input type="text" class="form-control" name="father_name"/><br/><br/>  
<label for="roll_no">Roll No:</label><br/>  
<input type="number" class="form-control" name="roll_no"/><br/><br/>    
<label for="city">City:</label><br/>  
<input type="text" class="form-control" name="city"/><br/><br/>  
<label for="state">State:</label><br/>  
<input type="text" class="form-control" name="state"/><br/><br/>  
          
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  