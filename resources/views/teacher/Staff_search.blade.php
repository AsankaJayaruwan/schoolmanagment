@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">

        <div class="page-title">
            <div class="title_left">
                <h3>Registered Teacher</h3>
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
                            Teacher Search
                        </ol>

                    </div>

                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Search results

                        </p>
                        <table id="mydatatable" class="table tableTeacher table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> Teacher Id</th>
                                <th> Teacher Name</th>
                                <th> Email Address</th>
                                <th> NIC</th>
                                <th>Master In Charge Societies</th>
                                <th>Asst. Master In Charge Societies</th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td> {{$teacher->tr_id}} </td>
                                    <td> {{$teacher->first_name}} {{$teacher->last_name}} {{$teacher->middle}} </td>
                                    <td> {{$teacher->email}} </td>
                                    <td> {{$teacher->nic}} </td>
                                    <td>@if ($teacher->society_mic->isEmpty()) Not Assigned
                                        @else
                                            <ul>

                                            @foreach($teacher->society_mic as $society)
                                                <li>{{$society->society_name}}</li>
                                            @endforeach
                                            </ul>
                                        @endif
                                    </td>
                                    <td>@if ($teacher->society_asi_mic->isEmpty()) Not Assigned
                                        @else
                                            <ul>

                                            @foreach($teacher->society_asi_mic as $society)
                                                <li>{{$society->society_name}}</li>
                                            @endforeach
                                            </ul>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url("staff/$teacher->id/view")}}">View</a> |
                                        <a href="{{url("staff/$teacher->id/update")}}">Edit</a> |
                                        <a href="#" data-url="{{url("staff/$teacher->id/delete")}}" class="teacherDelete"> Delete </a>
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
@endsection
@section('script_content')

    <script>

        $(document).ready(function () {
            $('#mydatatable').dataTable();
        });

        $(document).ready(function () {
            $('#datatable-buttons').DataTable();
        });

        $('#myDatepicker').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $('#myDatepicker').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

    </script>


    <!-- my js -->

    <script src="{{ URL::asset('vendors/my/my.js') }}"></script>

    <script>
        (
            function ($,window) {

                var table = $('.tableTeacher').dataTable();

                $('.teacherDelete').on('click', function (evt) {
                    const url = evt.currentTarget.attributes[1].nodeValue;
                    var confirm = window.confirm("Are you sure to delete this Teacher?");
                    if (confirm === true) {
                        window.location = url;
                    }
                })


            })($,window)
    </script>

@endsection