@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{$student->first_name.' '.$student->last_name}}'s Medical Information
                        <small>{{$student->st_id}}</small>
                    </h3>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        {!! Form::open(['class'=>'form-horizontal form-label-left','']) !!}
                        <div class="item form-group {{ $errors->has('height') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                Height
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                {!! Form::number('height',isset($student)?$student->height:null,['class'=>'form-control', 'placeholder'=>'Enter in cm', 'required'=>'required', 'step'=>'0.01','min'=>'0'])!!}
                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                Weight
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                {!! Form::text('weight',isset($student)?$student->weight:null,['class'=>'form-control', 'placeholder'=>'Enter in kg', 'required'=>'required', 'step'=>'0.01','max'=>'99.99','min'=>'20'])!!}
                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group {{ $errors->has('rung_spd') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                Running Speed
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                {!! Form::text('rung_spd',isset($student)?$student->running_speed:null,['class'=>'form-control', 'placeholder'=>'Enter in m/s','required'=>'required','min'=>'0'])!!}
                                @if ($errors->has('rung_spd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rung_spd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group {{ $errors->has('sickness') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                Sickness
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('sickness',isset($student)?$student->sickness:null,['class'=>'form-control', 'maxlength'=>'100'])!!}
                                @if ($errors->has('sickness'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sickness') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Finish</button>
                            </div>
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script_content')

@endsection