<form method="Post" action="{{route('crud.update',$crud->id)}}"> 
@method('PATCH')
 @csrf     
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" value={{$crud->first_name}}><br/><br/>  
          </div>  
  
<div class="form-group">      
              <label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name" value={{$crud->last_name}}><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender" value={{$crud->gender}}><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications" value={{$crud->qualifications}}><br/><br/>  
          </div>  
<br/>  
  
<button type="submit" class="btn-btn" >Update</button>  
</form>  
  
  
  