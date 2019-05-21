@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Houses</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div id="search-reult" class="x_content">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">

                                    <div class="x_content">
                                        <table id="mydatatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>House Id</th>
                                                <th>House Code</th>
                                                <th>House Name</th>
                                                <th>Student Count</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($houses as $house)
                                                <tr>
                                                    <td>{{$house->id}} </td>
                                                    <td>{{$house->house_code}} </td>
                                                    <td>{{$house->house_name}}</td>
                                                    <td>{{$house->students->count()}}</td>
                                                    <td><a href="{{url("achievement/$house->id/view")}}">view</a>
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
@endsection