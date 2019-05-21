@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Grade</h3>
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
                                    <a href="{{ url('/addsection') }}">Section</a>
                                </li>
                                <li>
                                    <i class="fa fa-file"></i> Grade
                                </li>
                                <li>
                                    <a href="{{ url('/addclassroom') }}">Class</a>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="grade_view" class="x_panel">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="x_panel">
                        <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                              method="post" action="{{url("postgrade")}}">
                            {{ csrf_field() }}

                            <div>
                                <input type="text" id="grade_code" name="grade_code" value="{{ old('grade_code') }}"
                                       required="required" placeholder="Grade Code"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('section_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="grade_name" name="grade_name" value="{{ old('grade_name') }}"
                                       required="required" placeholder="Grade Name"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('grade_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="grade_cordinator" name="grade_cordinator"
                                       value="{{ old('grade_cordinator') }}" required="required"
                                       placeholder="Grade Coordinator (Enter ID)"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('grade_cordinator'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade_cordinator') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="section_code" name="section_code"
                                       value="{{ old('section_code') }}" required="required" placeholder="Section Code"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('section_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section_code') }}</strong>
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
    </div>
    </div>
@endsection


@section('script_content')

    <script>
        $(document).ready(function () {
            $.get("{{url('viewgrade')}}", function (data) {
                $("#grade_view").html(data);
            });
        });

        function save() {
            grade_code = $("#grade_code").val();
            grade_name = $("#grade_name").val();
            grade_cordinator = $("#grade_cordinator").val();

            if (!(grade_code == '') && !(grade_name == '') && !(grade_cordinator == '')) {
                $.post("{{url('postgrade')}}",
                    {
                        grade_code: grade_code,
                        grade_name: grade_name,
                        grade_cordinator: grade_cordinator,
                    },
                    function (data) {
                        $.get("{{url('viewgrade')}}", function (data) {
                            $('grade_view').html(data);
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