@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit {{$student->first_name.' '.$student->last_name}}'s Basic Information</h3>
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
                                
                                <li>
                                    
                                </li>
                            </ol>
                        </div>
                        <div class="x_content">
                            {{--<form id="submit-student" data-parsley-validate class="form-horizontal form-label-left" method='post'--}}
                                {{--action="{{url("addsthealth")}}">--}}
                                {{--{{ csrf_field() }}--}}
                            <form id="submit-student" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("editst/{id}/update")}}">
                                {{ csrf_field() }}

                                {{--{!! Form::hidden('id',$student->id) !!}--}}
                                <input type="hidden" id="id" name="id" value="{{ $student->st_id }}" class="form-control">
                                <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" name="first_name"
                                           for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="first_name" maxlength="255" required="required"
                                               value="{{$student->first_name }}"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="last_name" maxlength="255" required="required"
                                               value="{{$student->last_name }}" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle
                                        Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" maxlength="255" required="required"
                                               value="{{$student->middle_name }}"
                                               class="form-control col-md-7 col-xs-12"
                                               type="text" name="middle_name">
                                        @if ($errors->has('middle_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('st_id') ? ' has-error' : '' }}">
                                    <label for="st_id" class="control-label col-md-3 col-sm-3 col-xs-12">Admission
                                        number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{--<input name="st_id" required="required" value="{{$student->st_id }}" --}}
                                        <input value="{{$student->st_id }}" readonly
                                               class="form-control col-md-7 col-xs-12" type="text">
                                        @if ($errors->has('st_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email1" value="{{$student->email }}" name="email"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                {{--
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="1"> &nbsp; Male &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="0"> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span
                                                class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group {{ $errors->has('DoB') ? ' has-error' : '' }}">
                                            <div class='input-group date' id='myDatepicker'>
                                                <input type='text' id="dob" name="DoB" class="form-control"
                                                       value="{{$student->DoB }}"/>
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
                                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="address" maxlength="255"
                                                  class="resizable_textarea form-control">{{$student->address }}</textarea>
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="city" maxlength="255" value="{{$student->city }}"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact Number</label>
                                    <div class="col-md-6 col-sm-6 col-xs-9">
                                        <input type="text" name="contact" value="{{$student->contact }}"
                                               class="form-control" required="required"
                                               data-inputmask="'mask' : '(999) 999-9999'">
                                        @if ($errors->has('contact'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                        @endif
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">House</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        {!! Form::select('house_id',$houses,$student->house->id,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <button class="btn btn-primary btn-success" type='submit'>Finish Medical
                                            Information</button>
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
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->




@section('script_content')
    <script>
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            ignoreReadonly: true,
            allowInputToggle: true,
            maxDate: moment()
        });

    </script>
@endsection
  