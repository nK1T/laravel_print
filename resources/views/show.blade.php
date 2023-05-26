<link rel="stylesheet" href="/resources/css/app.css">
<script type="text/php">
    if (isset($pdf)) {
        $x = 250;
        $y = 10;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $font = null;
        $size = 14;
        $color = array(255,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
<style>
    
  *{
    font-family:Arial, Helvetica, sans-serif
  }
  header{
    text-align: center;
  }

  #header{
    line-height: 1.1;
    font-weight:600;
  }
  #footer{
    justify-content: end;
    /* display: flex-end; */
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size: small;
    line-height: 0.1;
    /* font-weight:lighter; */
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
 font-weight: 600;
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
        width: 17%; /* Set the width of the second column to 30% */
    }
    th:nth-child(10),
    td:nth-child(10) {
        width: 15%; /* Set the width of the second column to 30% */
    }

    /* Define the styles for other columns as needed */
</style>
<body>
    <table border="1px solid black" cellspacing ="0" style="margin:auto;">  
        <thead> 
                <th colspan="10">
                    <header>
                      {{--<img src="{{URL::asset('assets/msell.png')}}" alt="Logo">--}}
                      <p id="header" >Manacle Technologies Pvt. Ltd.<br>243/10, Second Floor, Amritpuri-B,<br> East of Kailash, New Delhi-110065</p>
                    </header>
                </th>
            <tr>  
    <th style="font-weight: 600;">ID</th>  
    <th style="font-weight: 600;">First Name</th>  
    <th style="font-weight: 600;">Last Name</th>  
    <th style="font-weight: 600;">Gender</th>  
    <th style="font-weight: 600;">Age</th>  
    <th style="font-weight: 600;">YOB</th>  
    <th style="font-weight: 600;">Father Name</th>  
    <th style="font-weight: 600;">State</th>  
    <th style="font-weight: 600;">Roll No</th>    
    <th style="font-weight: 600;">City</th>  
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
          </tr>  
          @endforeach
        </tbody>  
        <tfoot>
            <th colspan="10">
                <p id="footer"> All copyrights &#169; reserved by Ankit Giri.</p>
            </th>
        </tfoot>
      </table>  
</body>

