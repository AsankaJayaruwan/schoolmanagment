@extends('sidebar_header')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                <center><img src="{{url("images/report.jpg")}}">
                <h3><label></label></h3></center>
              <div class="title_left">
                <h3>{{$house_name->house_name}} House</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    
                      <h3> Student list of class  {{$classroom_name->classroom_name}} </h3>
                      <br><br>
                     <table class="table table-hover" border="1">
                                <thead>
                                <tr>
                                    <th>Index No</th>
                                    <th>Full Name</th>
                                    <th>Date of Birth</th>
                                </tr>
                                </thead>
                                @foreach($matching_sts as $matching_st)
                                <tbody>
                                <td>{{$matching_st->st_id}}</td>
                                <td>{{$matching_st->first_name}} {{$matching_st->last_name}}</td>
                                <td>{{$matching_st->DoB}}</td>
                                </tbody>
                                @endforeach
                            </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       @endsection


@section('script_content')

@endsection