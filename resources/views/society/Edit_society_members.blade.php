@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
         @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                     <h3>Manage Sport Members of {{$so_names}} club</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ol class="breadcrumb">
                               
                                
                            </ol>
                        </div>
                        <div class="x_content">
                            <form id="submit-sport" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("editsocietymem")}}">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                             
                        <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Admission numbers</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" name="st_id" type="text" required="required" class="tags form-control"/>
                          <div id="suggestions-container" required="required" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
                                </div>
                            </div>
                               
                                <table class="table table-bordered" id='search'>
                                <thead>
                                <tr>
                                    <th>Index No.</th>
                                    <th>Full Name</th>
                                    <th>Current Class</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr>

                                        <td >{{$student->st_id}}</td>
                                        <td>{{$student->getFullName()}}</td>
                                        <td>{{$student->classroom->classroom_name}}</td>
                                        <td><a href="{{url("deletesocietymem/$student->st_id")}}" class="stdelete">
                                                | Delete
                                            </a></td>
                                    </tr>
                                   @endforeach

                                </tbody>
                            </table>
                            <div class="row">
                                <br> <br>
                                <div class="col-md-6 col-sm-6 col-xs-12  col-xs-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <input type="hidden" name="so_id" value="{{$so_id}}">  
                                        <button type="submit" class="btn btn-success">Finish</button>
                                </div>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@section('script_content')
@endsection
