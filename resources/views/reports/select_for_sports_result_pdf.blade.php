<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Isipathana College </title>

   
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
<!-- page content -->
<div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                 <center><img src="{{url("images/report.jpg")}}">
                <h1>Select students for sports</h1>
                <h1>{{($data['sport'])}}</h1></center>
                <h3>
                    
                </h3>
            </div>
        </div>                                    
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2><label>Purpose of the selection</label>
                    <label id="purpose" placeholder="Enter the purpose" required="required" class="form-control col-md-7 col-xs-12">{{($data['purpose'])}}</label>
                        </h2></div>
                
               <table class="table table-bordered" border="1">
                   
                      <thead> 
                        <tr>
                          <th>Admission number</th>
                          <th>Full name</th>    
                          <th>Class</th>  
                        </tr>                      
                      </thead>
                      <tbody>  
                         @foreach ($student as $student)
                        <tr>
                            
                            <td>{{$student->st_id}}</td>  
                            <td>{{$student->first_name}} {{$student->last_name}}</td>
                            <td>{{$student->classroom->classroom_name}}</td>
                         </tr>
                        
                        @endforeach
                      </tbody>
                    </table>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>
  
  </body>
</html>