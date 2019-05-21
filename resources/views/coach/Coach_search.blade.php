@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Coach</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ol class="breadcrumb">
                                Coach Search
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                    Search results
                                </p>
                                <table id="mydatatableCouch" class="table tableCouch table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th> Coach ID</th>
                                        <th> Coach Name</th>
                                        <th> Email Address</th>
                                        <th> Sport Name</th>
                                        <th> In Charge Sports</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($coachs as $coach)
                                        <tr>
                                            <td> {{$coach->coach_id}} </td>
                                            <td>{{$coach->first_name}} {{$coach->middle_name}} {{$coach->last_name}}</td>
                                            <td>{{$coach->email}}</td>
                                            <td>{{$coach->sp_id}}</td>
                                            <td>@if ($coach->sports->isEmpty()) Not Assigned
                                                @else
                                                    <ul>
                                                        @foreach($coach->sports as $sports)
                                                            <li>{{$sports->sport_name}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </td>
                                            <td><a href="{{url("couch/$coach->id/view")}}">View</a> |
                                                <a href="{{url("couch/$coach->id/update")}}">Edit</a> |
                                                <a href="#" data-url="{{url("couch/$coach->id/delete")}}" class="couchDelete"> Delete </a>
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
@endsection

@section('script_content')

    <script>
        $(document).ready(function () {
            $('#mydatatableCouch').dataTable();
            $('#datatable-buttons').DataTable();
        });
    </script>

    <script>
        (
            function ($,window) {

                var table = $('.tableCouch').dataTable();

                $('.couchDelete').on('click', function (evt) {
                    const url = evt.currentTarget.attributes[1].nodeValue;
                    var confirm = window.confirm("Are you sure to delete this Coach?");
                    if (confirm === true) {
                        window.location = url;
                    }
                })


            })($,window)
    </script>

@endsection
  