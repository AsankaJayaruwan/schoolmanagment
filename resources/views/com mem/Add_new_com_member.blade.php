@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Committee Member</h3>
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
                                    <i class="fa fa-file"></i> Add Committee Member
                                </li>

                            </ol>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postCom")}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="first_name" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="last_name" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                        Name / Initial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" name="middle_name"
                                               class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dev_id" class="control-label col-md-3 col-sm-3 col-xs-12">Member Id<span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="dev_id" name="dev_id" class="form-control col-md-7 col-xs-12"
                                               type="text" name="dev_id">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                                class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIC <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="nic" required="required"
                                               class="form-control col-md-7 col-xs-12" maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Joined <span
                                                class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' class="form-control" name="date_joined"
                                                       id='myDatepicker'/>
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span
                                                class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' class="form-control" name="DoB" id='myDatepicker1'/>
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name="civil_status">
                                            <option>Married</option>
                                            <option>Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name="religion">
                                            <option>Buddhism</option>
                                            <option>Islam</option>
                                            <option>Roman Catholic</option>
                                            <option>Non Roman Catholic</option>
                                            <option>Hindusm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" class="form-control col-md-7 col-xs-12"
                                               name="city">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" class="form-control"
                                               data-inputmask="'mask' : '(999) 999-9999'" name="contact_number">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" class="form-control"
                                               data-inputmask="'mask' : '(999) 999-9999'" name="mobile_number">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button type="submit" class="btn btn-success">Finish</button>
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

    <script>

        $('#myDatepicker').datetimepicker({
            format: 'YYYY.MM.DD'
        });

        $('#myDatepicker1').datetimepicker({
            format: 'YYYY.MM.DD'
        });


        $('#myDatepicker').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('#myDatepicker1').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });


    </script>
@endsection