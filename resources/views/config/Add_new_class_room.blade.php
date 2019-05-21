@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Class</h3>
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


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">
                                <li class="active">
                                    <a href="{{ url('/addsection') }}"> Section</a>
                                </li>
                                <li>
                                    <a href="{{ url('/addgrade') }}"> Grade</a>
                                </li>
                                <li>
                                    <i class="fa fa-file"></i> Class

                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="x_panel">
                        <div id="class_view" class="x_panel">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="x_panel">
                        <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                              method="post" action="{{url("postclassroom")}}">
                            {{ csrf_field() }}

                            <div>
                                <input type="text" id="section_code" name="classroom_code"
                                       value="{{ old('classroom_code') }}" required="required" placeholder="Class Code"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('classroom_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('classroom_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="section_name" name="classroom_name"
                                       value="{{ old('classroom_name') }}" required="required" placeholder="Class Name"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('classroom_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('classroom_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="sectional_head" name="teacher_incharge"
                                       value="{{ old('teacher_incharge') }}" required="required"
                                       placeholder="Teacher incharge (Enter ID)"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('teacher_incharge'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teacher_incharge') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="grade_code" name="grade_code" value="{{ old('grade_code') }}"
                                       required="required" placeholder="Grade Code"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('grade_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script_content')

    <script>
        $(document).ready(function () {
            $.get("{{url('viewclassroom')}}", function (data) {
                $("#class_view").html(data);
            });
        });

        function save() {
            classroom_code = $("#classroom_code").val();
            classroom_name = $("#classroom_name").val();
            teacher_incharge = $("#teacher_incharge").val();

            if (!(classroom_code == '') && !(classroom_name == '') && !(teacher_incharge == '')) {
                $.post("{{url('postclass')}}",
                    {
                        classroom_code: classroom_code,
                        classroom_name: classroom_name,
                        teacher_incharge: teacher_incharge,
                    },
                    function (data) {
                        $.get("{{url('viewclassroom')}}", function (data) {
                            $('class_view').html(data);
                        });
                    });

            }
            else {
                alert('error')
            }
        };
    </script>

    <!-- Initialize datetimepicker -->
    <script>

        $('#myDatepicker1').datetimepicker({
            format: 'YYYY.MM.DD'
        });

        $('#myDatepicker2').datetimepicker({
            format: 'YYYY.MM.DD'
        });

        $('#myDatepicker1').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('#myDatepicker2').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });
    </script>

@endsection 