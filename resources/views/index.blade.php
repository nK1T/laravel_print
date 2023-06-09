<link rel="stylesheet" href="/resources/css/app.css">
<style>
  *{
    font-family:Arial, Helvetica, sans-serif
  }
  header{
    text-align: center;
  }

  p{
    line-height: 1.1;
    font-weight:600;
  }
  .butto {
 appearance: none;
 background-color: transparent;
 border: 0.125em solid #1A1A1A;
 border-radius: 0.9375em;
 box-sizing: border-box;
 color: #3B3B3B;
 cursor: pointer;
 display: inline-block;
 font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
 font-size: 10px;
 font-weight: bold;
 line-height: normal;
 margin: 0;
 min-height: 1.3em;
 min-width: 0;
 outline: none;
 padding: 1em 2.3em;
 text-align: center;
 text-decoration: none;
 transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 will-change: transform;
}

.butto:disabled {
 pointer-events: none;
}

.butto:hover {
 color: #fff;
 background-color: #1A1A1A;
 box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
 transform: translateY(-2px);
}

.butto:active {
 box-shadow: none;
 transform: translateY(0);
}
    table {
        width: 100%; /*Set the table width to 100%*/
    }

    th:nth-child(1),
    td:nth-child(1) {
        width: 1%; /* Set the width of the first column to 20% */
    }

    th:nth-child(2),
    td:nth-child(2) {
        width: 12%; /* Set the width of the second column to 30% */
    }
    th:nth-child(3),
    td:nth-child(3) {
        width: 12%; /* Set the width of the second column to 30% */
    }
    th:nth-child(4),
    td:nth-child(4) {
        width: 5%; /* Set the width of the second column to 30% */
    }
    th:nth-child(5),
    td:nth-child(5) {
        width: 5%; /* Set the width of the second column to 30% */
    }
    th:nth-child(6),
    td:nth-child(6) {
        width: 5%; /* Set the width of the second column to 30% */
    }
    th:nth-child(7),
    td:nth-child(7) {
        width: 14%; /* Set the width of the second column to 30% */
    }
    th:nth-child(8),
    td:nth-child(8) {
        width:8%; /* Set the width of the second column to 30% */
    }
    th:nth-child(9),
    td:nth-child(9) {
        width: 7%; /* Set the width of the second column to 30% */
    }
    th:nth-child(10),
    td:nth-child(10) {
        width: 15%; /* Set the width of the second column to 30% */
    }
    th:nth-child(11),
    td:nth-child(11) {
        width: 15%; /* Set the width of the second column to 30% */
    }
    th:nth-child(12),
    td:nth-child(12) {
        width: 2%; /* Set the width of the second column to 30% */
    }
    th:nth-child(13),
    td:nth-child(13) {
        width: 2%; /* Set the width of the second column to 30% */
    }

    /* Define the styles for other columns as needed */
</style>
<body>
<header>
  <img src="{{URL::asset('assets/msell.png')}}" alt="Logo">
  <p>Manacle Technologies Pvt. Ltd.<br>243/10, Second Floor, Amritpuri-B,<br> East of Kailash, New Delhi-110065</p>
</header>
<thead><br>
<form style="text-align:end" action="{{route('crud.create')}}" method="GET">   
                <button class = "butto" type="submit">Add more</button>  
</form>
<table border="1px" style="margin:auto;">  
  <tr>  
    <td style="font-weight: 600;">ID</td>  
    <td style="font-weight: 600;">First Name</td>  
    <td style="font-weight: 600;">Last Name</td>  
    <td style="font-weight: 600;">Gender</td>  
    <td style="font-weight: 600;">Age</td>  
    <td style="font-weight: 600;">YOB</td>  
    <td style="font-weight: 600;">Father Name</td>  
    <td style="font-weight: 600;">Roll No</td>    
    <td style="font-weight: 600;">City</td>  
    <td style="font-weight: 600;">State</td>  
    <td style="font-weight: 600;" colspan="2">Operations</td> 
  </tr>  
</thead>  
<tbody>  
  @foreach($cruds as $crud)  
  <tr>  
          <td>{{$loop->index+1}}</td>  
          <td>{{$crud->first_name}}</td>  
          <td>{{$crud->last_name}}</td>  
          <td>{{$crud->gender}}</td>  
          <td>{{$crud->age}}</td>  
          <td>{{$crud->yob}}</td>  
          <td>{{$crud->father_name}}</td>  
          <td>{{$crud->roll_no}}</td>  
          <td>{{$crud->city}}</td>  
          <td>{{$crud->state}}</td>  
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
      </table>  <br>
      <a class="butto"href= "{{ URL::to('/pdf') }}">PDF</a>
      <a class="butto"href= "{{ URL::to('/csv') }}">CSV</a>
</body>

