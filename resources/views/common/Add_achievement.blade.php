@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Achievement</h3>
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
                        <div class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a class="selected" rel="1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                             Step 1<br>
                                            <small>Add Activity</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="selected" rel="2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                              Step 2<br>
                                              <small>Add Achievement</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="disabled" rel="3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                              Step 3<br>
                                              <small>Add Student Achievement</small>
                                          </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="x_content">
                            <form id="submit-achievement" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postach")}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Achievement Name
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="ach_name" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Activity Name
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" name="act_name" readonly="readonly"
                                               value="{{$activity->activity_name}}" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Achievement<span class="required">                            *</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" name="achievement">
                                            <option value="Champion">Champion</option>
                                            <option value="1st Runners Up">1st Runners Up</option>
                                            <option value="2nd Runners Up">2nd Runners Up</option>
                                            <option value="Best Player">Best Player</option>
                                            <option value="Participation">Participation</option>
                                    </select>
                                      </div>
                                                 </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" required="required" name="type">
                                            <option value="Group">Group</option>
                                            <option value="Individual">Individual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" name="level" required="required">
                                            <option value="Intra School">Intra School</option>
                                            <option value="Zonal">Zonal</option>
                                            <option value="Provincial">Provincial</option>
                                            <option value="National">National</option>
                                            <option value="International">International</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <input type="hidden" name="act_id" value="{{$activity->id}}">
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