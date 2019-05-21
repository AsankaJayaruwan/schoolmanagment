@extends('sidebar_header')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                 <center><img src="{{url("images/report.jpg")}}">
                <h3><label></label></h3></center>
              <div class="title_left">
                <h3>{{$houses->house_name}} House <small>Teacher list</small></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    
                                           
                      <br><br>
                     <table class="table table-bordered" id='search'>
                                <thead>
                                <tr>
                                    <th>Teacher Id</th>
                                    <th>Full Name</th>
                                </tr>
                                </thead>
                               
                                <tbody>
                                @foreach($tr_houses as $tr_house)
                                    <tr>
                                        <td>{{$tr_house->tr_id}}</td>
                                        <td>{{$tr_house->first_name}} {{$tr_house->last_name}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection

@section('script_content')

@endsection
