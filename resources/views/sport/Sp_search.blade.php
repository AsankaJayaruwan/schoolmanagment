@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Sport</h3>
                </div>
                {{--
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
                --}}
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">
                                Sport Search
                            </ol>
                        </div>
                        <div id="search-reult" class="x_content" onload="showTable()">
                            <p class="text-muted font-13 m-b-30">
                                Search results

                            </p>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">
                                        <table id="mydatatable" class="table tableSport table-striped table-bordered">
                                            <thead>
                                            <tr> 
                                                <th>Sport ID</th>
                                                <th>Sport Name</th>
                                                <th>Teacher In Charge</th>
                                                <th>Coach in Charge</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sports as $sport)
                                                <tr>
                                                    <td>{{$sport->sp_id}} </td>
                                                    <td>{{$sport->sport_name}}</td>
                                                    <td>{{$sport->micsport?$sport->micsport->name():''}}</td>
                                                    <td>{{$sport->coachsport?$sport->coachsport->first_name.' '.$sport->coachsport->last_name:''}}</td>
                                                    <td><a href="{{url("sport/$sport->id/view")}}">View</a> |
                                                        <a href="{{url("sport/$sport->id/edit")}}">Edit</a> |
                                                        <a href="#" data-url="{{url("sport/$sport->id/delete")}}" class="sportDelete"> Delete </a> |
                                                        <a href="{{ url('/spmemberlist') }}/{{$sport->id}}/view">Manage Members</a> 
                                                         
                                                    </td>  
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
            </div>
        </div>
    </div>

@endsection


@section('script_content')
    <script>

        $(document).ready(function () {
            $('#mydatatable').dataTable();
        });

        $(document).ready(function () {
            $('#datatable-buttons').DataTable();
        });


    </script>
    <!-- my js -->

    <script src="{{ URL::asset('vendors/my/my.js') }}"></script>

    <script>
        $(document).ready(function () {
            $("search-reult").hide();
            $("advanced").click(function () {
                $("search-reult").show();
            });
        });
    </script>

    <script>
        (
            function ($,window) {

                var table = $('.tableSport').dataTable();

                $('.sportDelete').on('click', function (evt) {
                    const url = evt.currentTarget.attributes[1].nodeValue;
                    var confirm = window.confirm("Are you sure to delete this Sport?");
                    if (confirm === true) {
                        window.location = url;
                    }
                })


            })($,window)
    </script>
@endsection