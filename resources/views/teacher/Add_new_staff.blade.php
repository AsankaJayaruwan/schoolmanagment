@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Staff</h3>
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
                                    <i class="fa fa-file"></i> Add new staff
                                </li>

                            </ol>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("poststaff")}}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first_name" name="first_name"
                                               value="{{ old('first_name') }}" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last_name" name="last_name"
                                               value="{{ old('last_name') }}" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                    <label for='middle_name' class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                        Name </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle_name" name='middle_name' value="{{ old('middle_name') }}"
                                               class="form-control col-md-7 col-xs-12" type="text">
                                        @if ($errors->has('middle_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id') ? ' has-error' : '' }}">
                                    <label for="tr_id" class="control-label col-md-3 col-sm-3 col-xs-12">Teacher ID<span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name='tr_id' id="tr_id" value="{{ old('tr_id') }}"
                                               class="form-control col-md-7 col-xs-12" type="text">
                                        @if ($errors->has('tr_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group {{ $errors->has('st_id') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                                class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" value="{{ old('email') }}" name="email"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('nic') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic">NIC <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="{{ old('nic') }}" required="required"
                                               name="nic" class="form-control col-md-7 col-xs-12" maxlength="10">
                                        @if ($errors->has('nic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default {{ old('gender') == 1 ?'active':'' }}"
                                                   data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-primary">
                                                {!! Form::radio('gender', '1', true) !!}
                                                Male
                                            </label>
                                            <label class="btn btn-default {{ old('gender') && old('gender') == 0 ?'active':'' }}"
                                                   data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-primary">
                                                {!! Form::radio('gender', '0', true) !!}
                                                Female
                                            </label>
                                        </div>
                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Joined <span
                                                class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group {{ $errors->has('date_joined') ? ' has-error' : '' }}">
                                            <div class='input-group date'>
                                                <input type='text' id='myDatepicker1' name="date_joined"
                                                       class="form-control" value="{{ old('date_joined') }}"/>
                                                @if ($errors->has('date_joined'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_joined') }}</strong>
                                    </span>
                                                @endif
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
                                        <div class="form-group {{ $errors->has('DoB') ? ' has-error' : '' }}">
                                            <div class='input-group date'>
                                                <input type='text' id='myDatepicker2' name='DoB' class="form-control"
                                                       value="{{ old('DoB') }}"/>
                                                @if ($errors->has('DoB'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('DoB') }}</strong>
                                    </span>
                                                @endif
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('civil_status') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name='civil_status'
                                                value="{{ old('civil_status') }}">
                                            <option value="1">Married</option>
                                            <option value="0">Unmarried</option>
                                        </select>
                                        @if ($errors->has('civil_status'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('civil_status') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('religion') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12" name='religion'>
                                        <select class="form-control" name="religion" value="{{ old('religion') }}">
                                            <option value="1">Buddhism</option>
                                            <option value="2">Islam</option>
                                            <option value="3">Roman Catholic</option>
                                            <option value="4">Non Roman Catholic</option>
                                            <option value="5">Hindusm</option>
                                        </select>
                                        @if ($errors->has('religion'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name="designation"
                                                value="{{ old('designation') }}">
                                            <option value="1">Principal</option>
                                            <option value="2">Vice Principal</option>
                                            <option value="3">Assistant Principal</option>
                                            <option value="4">Co ordinator</option>
                                            <option value="5">POG</option>
                                            <option value="6">POS</option>
                                            <option value="7">Sectional Head</option>
                                            <option value="8">Grade Co ordinator</option>
                                            <option value="9">Teacher</option>
                                        </select>
                                        @if ($errors->has('designation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('designation_type') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation Type</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control" name="designation_type"
                                                value="{{ old('designation_type') }}">
                                            <option value="1">Academic</option>
                                            <option value="2">Financial</option>
                                            <option value="3">Co curricular</option>
                                            <option value="4">Admin</option>
                                        </select>
                                        @if ($errors->has('designation_type'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('designation_type') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('house') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">House</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">

                                        {!! Form::select('house',$house,null,['class'=>'form-control']) !!}

                                        @if ($errors->has('house'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('house') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control"
                                                  name='address'>{{ old('address') }}</textarea>
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="city" name="city" value="{{ old('city') }}"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('contact_number') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" class="form-control" value="{{ old('contact_number') }}"
                                               name="contact_number" data-inputmask="'mask' : '(999) 999-9999'">
                                        @if ($errors->has('contact_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                        @endif
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" name="mobile_number" value="{{ old('mobile_number') }}"
                                               class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                        @endif
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                            {{--
                            @if($errors->has())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                            --}}
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
        const datetimeOptions = {
                format: 'YYYY.MM.DD',
                ignoreReadonly: true,
                allowInputToggle: true,
                maxDate: moment()
            }
        ;
        $('#myDatepicker1').datetimepicker(datetimeOptions);

        datetimeOptions.maxDate = moment().subtract(18, 'years');

        $('#myDatepicker2').datetimepicker(datetimeOptions);

        /*
        $('#myDatepicker1').datetimepicker({
        });

        $('#myDatepicker2').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });
        */
    </script>

@endsection 