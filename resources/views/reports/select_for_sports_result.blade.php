@extends('sidebar_header')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
        <div class="page-title">
            <center><img src="{{url("images/report.jpg")}}">
                <h3><label>Select students for {{($data['sport'])}}</label></h3></center>
            <div class="title_left">
                
                
               
            </div>
        </div>                                    
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>Purpose of the selection:{{($data['purpose'])}}
                    </h3></div>
                <br><br>
                <div class="row">
                    <center>
               <table class="table table-striped" border="1">               
                      <thead> 
                        <tr>
                          <th>Admission number</th>
                          <th>Full name</th>    
                          <th>Class</th> 
                          <th>Date of Birth</th>
                        </tr>                      
                      </thead>
                      <tbody>  
                         @foreach ($student as $student)
                        <tr>
                            
                            <td>{{$student->st_id}}</td>  
                            <td>{{$student->first_name}} {{$student->last_name}}</td>
                            <td>{{$student->classroom->classroom_name}}</td>
                            <td>{{$student->dob}}</td> 
                         </tr>
                        
                        @endforeach
                      </tbody>
                    </table>
                        </center>
                </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection


@section('script_content')

@endsection