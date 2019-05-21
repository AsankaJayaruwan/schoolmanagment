@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Students</h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("savest")}}">
                                {{ csrf_field() }}
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="x_panel">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <table class="table table-bordered" id='search'>
                                <thead>
                                <tr>
                                    <th>Index No.</th>
                                    <th>Full Name</th>
                                    <th>Current Class</th>
                                    <th>Birth Year</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>Index No.</th>
                                    <th>Full Name</th>
                                    <th>Current Class</th>
                                    <th>Birth Year</th>
                                    <td></td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->st_id}}</td>
                                        <td>{{$student->getFullName()}}</td>
                                        <td>{{$student->classroom->classroom_name}}</td>
                                        <td>{{substr($student->DoB,0,4)}}</td>
                                        <td>
                                            <a href="{{url("st_profile_ach/$student->st_id")}}">
                                                View
                                            </a>
                                            <a href="{{url("editst/$student->st_id")}}">
                                                | Edit
                                            </a>
                                            <a href="#" class="stdelete" data-url="{{url("deletest/$student->st_id")}}">
                                                | Delete
                                            </a>
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

@endsection

@section('script_content')

    <script>
        (
            function ($,window) {

            var table = $('.table').dataTable();

            $('.stdelete').on('click', function (evt) {
                const url = evt.currentTarget.attributes[2].nodeValue;
                var confirm = window.confirm("Are you sure to delete this student?");
                if (confirm === true) {
                    window.location = url;
                }
            })


        })($,window)

    </script>
    <!-- my js -->

    <script src="{{ URL::asset('vendors/my/my.js') }}"></script>

    <script>
        function showDiv() {
            div = document.getElementById('ads');
            div.style.display = "block";
        }
    </script>

    <script>
        $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#search tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    // DataTable
    var table = $('#search').DataTable();

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    });
    </script>
@endsection