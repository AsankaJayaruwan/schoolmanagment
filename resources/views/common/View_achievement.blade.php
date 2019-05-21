@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Achievement</h3>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">
                                <li class="active">
                                </li>
                            </ol>
                        </div>
                        <div class="x_content">
                            <form id="submit-achievement" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postach")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Achievement Name
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="ach_name" readonly="readonly" placeholder="{{$achievements->ach_name}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Activity Name
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="act_name" readonly="readonly"
                                               value="{{$achievements->activity->activity_name}}" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Achievement<span class="required">                            *</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" name="achievement" readonly="readonly" placeholder="{{$achievements->achievement}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                   
                                                 </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="type" readonly="readonly" placeholder="{{$achievements->type}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="type" readonly="readonly" placeholder="{{$achievements->level}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
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
        $('#myDatepicker').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#myDatepicker').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

    </script>

@endsection