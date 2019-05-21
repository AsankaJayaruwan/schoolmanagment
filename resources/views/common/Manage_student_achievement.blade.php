@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Student Achievement</h3>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">

                                <li class="active">
                                    <i class="fa fa-file"></i>Add Student Achievement
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
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="selected" rel="3">
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                  method='post' action="{{url('addstach')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ach_id">Achievement
                                        Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" id="ach_name" name="ach_name"
                                               value="{{$achievement->ach_name}}" readonly="readonly" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                               
                                
                        <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Admission numbers</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" name="st_id" type="text" required="required" class="tags form-control"/>
                          <div id="suggestions-container" required="required" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Achievement<span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control">
                                            <option id="Champion">Champion</option>
                                            <option id="1st Runners Up">1st Runners Up</option>
                                            <option id="2nd Runners Up">2nd Runners Up</option>
                                            <option id="2nd Runners Up">Best Player</option>
                                            <option id="Participation">Participation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mark">Marks Allocate
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" required="required" name="mark"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <input type="hidden" name="ach_id" value="{{$achievement->id}}">
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
            format: 'YYYY.MM.DD'
        });

        $('#myDatepicker').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

    </script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection