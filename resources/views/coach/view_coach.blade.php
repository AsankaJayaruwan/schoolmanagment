@extends('sidebar_header')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    @include('messages.messages')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Profile of {{$couch->first_name}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form id="submit_couch" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="first_name" required="required"
                                       class="form-control col-md-7 col-xs-12" placeholder="{{$couch->first_name}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="last_name" required="required"
                                       class="form-control col-md-7 col-xs-12" placeholder="{{$couch->last_name}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                Name / Initial</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" name="middle_name"
                                       class="form-control col-md-7 col-xs-12" type="text" placeholder="{{$couch->middle_name}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Coach
                                ID<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="coach_id" class="form-control col-md-7 col-xs-12" type="text"
                                       name="coach_id" placeholder="{{$couch->coach_id}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                    class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" required="required" name="email"
                                       class="form-control col-md-7 col-xs-12" placeholder="{{$couch->email}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic">NIC <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nic" name="nic" required="required"
                                       class="form-control col-md-7 col-xs-12" maxlength="10" placeholder="{{$couch->nic}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="gender" name='gender' readonly="readonly"
                                       class="form-control col-md-7 col-xs-12" type="text"
                                       placeholder="{{$couch->gender==1?'Male':'Female'}}">
                            </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Joined <span
                                    class="required">*</span>
                            </label>
                            <div class='col-sm-4'>
                                <div class="form-group">
                                    <div class='input-group date'>
                                        <input type='text' required="required" id='myDatepicker1'
                                               name="date_joined" class="form-control" placeholder="{{$couch->date_joined}}" readonly="readonly"/>
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
                                        <input type='text' required="required" id='myDatepicker2' name="DoB"
                                               class="form-control" placeholder="{{$couch->DoB}}" readonly="readonly"/>
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
                                <input id="civil_status" name='civil_status' readonly="readonly"
                                       class="form-control col-md-7 col-xs-12" type="text"
                                       placeholder="{{$couch->civil_status==0?'Unmarried':'Married'}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                            <div class="col-md-4 col-sm-4 col-xs-12" name="religion">
                                <?php
                                switch ($couch->religion) {
                                    case 1:
                                        echo '<input type="text" class="form-control" readonly="readonly" value="Buddhism">';
                                        break;
                                    case 2:
                                        echo 'Islam';
                                        break;
                                    case 3:
                                        echo 'Roman Catholic';
                                        break;
                                    case 4:
                                        echo 'Non Roman Catholic';
                                        break;
                                    case 5:
                                        echo 'Hinduism';
                                        break;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="resizable_textarea form-control" name="address">{{$couch->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="city" name="city"
                                       class="form-control col-md-7 col-xs-12" placeholder="{{$couch->city}}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                            <div class="col-md-6 col-sm-6 col-xs-9">
                                <input type="text" name="contact_number" class="form-control"
                                       data-inputmask="'mask' : '(999) 999-9999'" placeholder="{{$couch->contact_number}}" readonly="readonly">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                            <div class="col-md-6 col-sm-6 col-xs-9">
                                <input type="text" required="required" name="mobile_number" class="form-control"
                                       data-inputmask="'mask' : '(999) 999-9999'" placeholder="{{$couch->mobile_number}}" readonly="readonly">
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
@endsection

@section('script_content')
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
