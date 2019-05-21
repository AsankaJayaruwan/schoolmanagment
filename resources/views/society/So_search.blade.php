@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Society</h3>
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

                        <div id="search-reult" class="x_content" onload="showTable()">
                            <p class="text-muted font-13 m-b-30">
                                Search results

                            </p>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">
                                        <table id="mydatatable" class="table tableSociety table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Society ID</th>
                                                <th>Society Name</th>
                                                <th>Teacher In Charge</th>
                                                <th>President</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($societies as $society)

                                                <tr>
                                                    <td> {{$society->so_id}} </td>
                                                    <td> {{$society->society_name}}</td>
                                                    <td> {{$society->mic->first_name}} {{$society->mic->last_name}}</td>
                                                    <td> {{$society->president->first_name}} {{$society->president->last_name}}</td>
                                                    <td>
                                                        <a href="{{url("society/$society->id/view")}}">View</a> |
                                                        <a href="{{url("society/$society->id/$society->tr_id_mic/$society->tr_id_ast_mic/$society->st_id_president/$society->st_id_secretary/$society->st_id_treasurer/edit")}}/">Edit</a> |
                                                        <a href="#" data-url="{{url("society/$society->id/delete")}}" class="societyDelete">Delete</a> |
                                                        <a href="{{ url('/somemberlist') }}/{{$society->id}}/view">Manage Members</a> 
                                                        
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

                var table = $('.tableSociety').dataTable();

                $('.societyDelete').on('click', function (evt) {
                    const url = evt.currentTarget.attributes[1].nodeValue;
                    var confirm = window.confirm("Are you sure to delete this Society?");
                    if (confirm === true) {
                        window.location = url;
                    }
                })


            })($,window)
    </script>
@endsection