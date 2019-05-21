@extends('sidebar_header')
@section('css')
    <link rel="stylesheet" href="{{url('vendors/bootstrap-daterangepicker/daterangepicker.css')}}">
@endsection
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>School Achievements</h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="x_panel">
                            <div>
                               
                               
                                    <div class="x_content">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-12">
                                                  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                           
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
                                                <th>Achievement Id</th>
                                                <th>Achievement Name</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($achievements as $achievement)
                                                <tr>
                                                   <td>{{$achievement->id}}</td>
                                                   <td>{{$achievement->ach_name}}</td>
                                                   <td>{{$achievement->level}}</td>
                                                   <td>Delete</td>

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

        (function ($, window) {
            $('.deleteAch').on('click', function (evt) {
                const url = evt.currentTarget.attributes[1].nodeValue;
                var confirm = window.confirm("Are you sure to delete this Achievement?");
                if (confirm === true) {
                    window.location = url;
                }
            });

        })($,window)
    </script>
@endsection