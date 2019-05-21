@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">

        <div class="page-title">
            <div class="title_left">
                <h3>Activity Search</h3>
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

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!-- <h2>Add new student</h2> -->
                        <ol class="breadcrumb">
                           
                        </ol>

                    </div>

                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Search results

                        </p>
                        <table id="mydatatable" class="table tableTeacher table-striped table-bordered">
                            <thead>
                           <tr>
                                            <th>Activity ID</th>
                                            <th>Activity Name</th>
                                            <th>Activity type</th>
                                            <th>Club name</th>
                                            <th>Activity Commenced Date</th>
                                            <th>Action</th>
                                        </tr>
                            </thead>
                            <tbody>
                                        @foreach($results as $result)

                                            <tr>
                                                <td> {{$result->id}}</td>
                                                <td> {{$result->activity_name}}</td>
                                                <td> {{$result->type_name}}</td>
                                                <td> {{$result->sport_name}} {{$result->society_name}}</td>
                                                <td> {{$result->date}}</td>
                                                <td><a href="{{url("activity/$result->id/delete")}}">Delete</a></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                        </table>
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

    

@endsection