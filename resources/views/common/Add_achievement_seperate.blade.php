@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Society Activities</h3>
                </div>

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
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">
                                Activity Search
                            </ol>
                        </div>
                        <div id="search-reult" class="x_content" onload="showTable()">
                            <p class="text-muted font-13 m-b-30">
                                Search results

                            </p>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">
                                        <table id="mydatatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Activity ID</th>
                                                <th>Activity Name</th>
                                                <th>Sport/Society ID</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($activities as $activity)

                                                <tr>
                                                    <td> {{$activity->id}} </td>
                                                    <td> {{$activity->activity_name}}</td>
                                                    <td> {{$activity->sp_id}} {{$activity->so_id}}</td>
                                                    <td><a href="{{url("activity/$activity->id/viewach")}}">Add Achievement</a> 
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
@endsection