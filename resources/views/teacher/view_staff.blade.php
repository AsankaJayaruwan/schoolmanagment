@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Profile of {{$teacher->name()}}</h3>
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
                                <li class="active">
                                    <i class="fa fa-file"></i> Basic Information
                                </li>

                            </ol>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first_name" name="first_name" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$teacher->first_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last_name" name="last_name" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$teacher->last_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for='middle_name' class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                        Name / Initial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle_name" name='middle_name' readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               placeholder="{{$teacher->middle_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tr_id" class="control-label col-md-3 col-sm-3 col-xs-12">Teacher
                                        ID</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name='tr_id' id="tr_id" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               placeholder="{{$teacher->tr_id}}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$teacher->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic">NIC
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="nic" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" maxlength="10"
                                               placeholder="{{$teacher->nic}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for='Gender' class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="gender" name='gender' readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               placeholder="{{$teacher->gender==0?'Male':'Female'}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Joined
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' id='myDatepicker1' readonly="readonly"
                                                       name="date_joined" class="form-control"
                                                       placeholder="{{$teacher->date_joined}}"/>
                                                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' id='myDatepicker2' readonly="readonly" name='DoB'
                                                       class="form-control" placeholder="{{$teacher->DoB}}"/>
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="civil_status" name='civil_status' readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               placeholder="{{$teacher->civil_status==0?'Unmarried':'Married'}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12" name='religion'>

                                        <?php
                                        switch ($teacher->religion) {
                                            case 1:
                                                echo '<input type="text" class="form-control" readonly="readonly" value="Buddhism">';
                                                break;
                                            case 2:
                                                echo '<input type="text" class="form-control" readonly="readonly" value="Islam">';
                                                break;
                                            case 3:
                                                echo '<input type="text" class="form-control" readonly="readonly" value="Roman Catholic">';
                                                break;
                                            case 4:
                                                echo '<input type="text" class="form-control" readonly="readonly" value="Non Roman Catholic">';
                                                break;
                                            case 5:
                                                echo '<input type="text" class="form-control" readonly="readonly" value="Hinduism">';
                                                break;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12" name="designation">
                                        <?php
                                        switch ($teacher->designation) {
                                            case 1:
                                                echo '<input type="text" value="Principal" class="form-control" readonly="readonly">';
                                                break;
                                            case 2:
                                                echo '<input type="text" value="Vice Principal" class="form-control" readonly="readonly">';
                                                break;
                                            case 3:
                                                echo '<input type="text" value="Assistant Principal" class="form-control" readonly="readonly">';
                                                break;
                                            case 4:
                                                echo '<input type="text" value="Co ordinator" class="form-control" readonly="readonly">';
                                                break;
                                            case 5:
                                                echo '<input type="text" value="POG" class="form-control" readonly="readonly">';
                                                break;
                                            case 6:
                                                echo '<input type="text" value="POS" class="form-control" readonly="readonly">';
                                                break;
                                            case 7:
                                                echo '<input type="text" value="Sectional Head" class="form-control" readonly="readonly">';
                                                break;
                                            case 8:
                                                echo '<input type="text" value="Grade Co ordinator" class="form-control" readonly="readonly">';
                                                break;
                                            case 9:
                                                echo '<input type="text" value="Teacher" class="form-control" readonly="readonly">';
                                                break;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation Type</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12" name="designation_type">
                                        <?php
                                        switch ($teacher->designation_type) {
                                            case 1:
                                                echo '<input type="text" value="Academic" class="form-control" readonly="readonly">';
                                                break;
                                            case 2:
                                                echo '<input type="text" value="Financial" class="form-control" readonly="readonly">';
                                                break;
                                            case 3:
                                                echo '<input type="text" value="Co curricular" class="form-control" readonly="readonly">';
                                                break;
                                            case 4:
                                                echo '<input type="text" value="Admin" class="form-control" readonly="readonly">';
                                                break;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">House</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12" name="house">
                                        {!! Form::select('house',$house,$teacher->house,['class'=>'form-control','readonly' => "readonly"]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" name='address'
                                                  readonly="readonly" placeholder="{{$teacher->address}}"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="city" name="city" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12" placeholder="{{$teacher->city}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" class="form-control" readonly="readonly"
                                               name="contact_number" data-inputmask="'mask' : '(999) 999-9999'"
                                               placeholder="{{$teacher->contact_number}}">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" name="mobile_number" readonly="readonly" class="form-control"
                                               data-inputmask="'mask' : '(999) 999-9999'"
                                               placeholder="{{$teacher->mobile_number}}">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">OK</button>
                                    </div>
                                </div>

                            </form>
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

    <!-- Ion.RangeSlider -->
    <script src="{{ URL::asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Cropper -->
    <script src="{{ URL::asset('vendors/cropper/dist/cropper.min.js') }}"></script>

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