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
                            <form id="submit_couch" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("editCouch")}}">
                                {{ csrf_field() }}
                                <input type="hidden" id="id" name="id" value="{{$couch->id}}" class="form-control">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="first_name" required="required"
                                               class="form-control col-md-7 col-xs-12" value="{{$couch->first_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="last_name" required="required"
                                               class="form-control col-md-7 col-xs-12" value="{{$couch->last_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                        Name / Initial</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" name="middle_name"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               value="{{$couch->middle_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Coach
                                        ID<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="coach_id" class="form-control col-md-7 col-xs-12" type="text"
                                               name="coach_id" value="{{$couch->coach_id}}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                                class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" required="required" name="email"
                                               class="form-control col-md-7 col-xs-12" value="{{$couch->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic">NIC <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nic" name="nic" required="required"
                                               class="form-control col-md-7 col-xs-12" maxlength="10"
                                               value="{{$couch->nic}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary {{$couch->gender == 1 ?'active':''}}">
                                                <input type="radio" name="gender" autocomplete="off"
                                                       value="1" {{ $couch->gender == '1' ? 'checked' : '' }}>
                                                &nbsp; Male &nbsp
                                            </label>
                                            <label class="btn btn-primary {{$couch->gender == 0 ?'active':''}}">
                                                <input type="radio" autocomplete="off" name="gender"
                                                       value="0" {{ $couch->gender == '0' ? 'checked' : '' }}> Female
                                            </label>
                                        </div>
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
                                               name="date_joined" class="form-control" value="{{$couch->date_joined}}"/>
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
                                               class="form-control" value="{{$couch->DoB}}"/>
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
                                <select class="form-control" name='civil_status'
                                        value="{{ $couch->civil_status }}">
                                    <option value="1">Married</option>
                                    <option value="0">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                            <div class="col-md-4 col-sm-4 col-xs-12" name="religion">
                                <select class="form-control" name="religion" value="{{ $couch->religion }}">
                                    <option value="1">Buddhism</option>
                                    <option value="2">Islam</option>
                                    <option value="3">Roman Catholic</option>
                                    <option value="4">Non Roman Catholic</option>
                                    <option value="5">Hindusm</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="resizable_textarea form-control"
                                          name="address">{{$couch->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="city" name="city"
                                       class="form-control col-md-7 col-xs-12" value="{{$couch->city}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                            <div class="col-md-6 col-sm-6 col-xs-9">
                                <input type="text" name="contact_number" class="form-control"
                                       data-inputmask="'mask' : '(999) 999-9999'" value="{{$couch->contact_number}}">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                            <div class="col-md-6 col-sm-6 col-xs-9">
                                <input type="text" required="required" name="mobile_number" class="form-control"
                                       data-inputmask="'mask' : '(999) 999-9999'" value="{{$couch->mobile_number}}">
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
