@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Section</h3>
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
                                    <i class="fa fa-file"></i> Section
                                </li>
                                <li>
                                    <a href="{{ url('/addgrade') }}">Grade</a>
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
                    <div id='section_view' class="x_panel">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="x_panel">
                        <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                              method="post" action="{{url("postsection")}}">
                            {{ csrf_field() }}

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
                            <div>
                                <input type="text" id="section_name" name="section_name"
                                       value="{{ old('section_name') }}" required="required" placeholder="Section Name"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('section_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div>
                                <input type="text" id="sectional_head" name="sectional_head"
                                       value="{{ old('sectional_head') }}" required="required"
                                       placeholder="Sectional Head (Enter Tr ID)"
                                       style="background:transparent; border:none; border-bottom: solid 1px">
                                @if ($errors->has('sectional_head'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sectional_head') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br><br>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="button" class="btn btn-success" onclick="save()">Save</button>
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

    <!-- Initialize datetimepicker -->

    <script>
        $(document).ready(function () {
            $.get("{{url('viewsection')}}", function (data) {
                $('#section_view').html(data);
            });

        });


        function save() {
            //validations
            section_code = $("#section_code").val();
            section_name = $("#section_name").val();
            sectional_head = $("#sectional_head").val();

            if (!(section_code == '') && !(section_name == '') && !(sectional_head == '')) {
                $.post("{{url('postsection')}}",
                    {
                        section_code: section_code,
                        section_name: section_name,
                        sectional_head: sectional_head,
                    },
                    function (data) {
                        //  alert(data);
                        $.get("{{url('viewsection')}}", function (data) {
                            $('#section_view').html(data);
                        });

                    });

            }

            else {
                alert('Error')
            }


        };

        function deletesection(id) {
            $.get("{{url('deletesection')}}/" + id, function (data) {
                //  alert(data);
                $.get("{{url('viewsection')}}", function (data) {
                    $('#section_view').html(data);
                });
            });
        }

        function editsection(id) {
            $.get("{{url('editsection')}}/" + id, function (data) {
                //  alert(data);
                $("#section_code").val(data.section_code);
                $("#section_name").val(data.section_name);
                $("#sectional_head").val(data.sectional_head);
                $.get("{{url('viewsection')}}", function (data) {
                    $('#section_view').html(data);
                });
            });
        }


    </script>


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