
@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Activity</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a class="selected" rel="1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                             Step 1<br/>
                                            <small>Add Activity</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="disabled" rel="2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                              Step 2<br/>
                                              <small>Add Achievement</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="disabled" rel="3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                              Step 3<br/>
                                              <small>Add Student Achievement</small>
                                          </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="x_content">
                            <form id="type-form" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postact")}}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('activity_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="act-name">Activity
                                        Name
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" required="required" name="activity_name" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('activity_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('activity_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select the Society/
                                        Sport<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="club" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="club" value="sport">Sport
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary"
                                                   data-toggle-passive-class="btn-default">
                                                <input type="radio" name="club" value="society">Society
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{--
                                <div class='form-group'>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select the Society/
                                        Sport<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="" value="society" name="club"> Society
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="sport" name="club"> Sport
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                --}}

                                <div class="form-group ">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="president-name">Sport/Society
                                        ID <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <select class="form-control" name="club_id">
                                                @foreach($societies as $societies)
                                                <option value='{{$societies->so_id}}'>{{$societies->society_name}}</option>
                                                @endforeach
                                                @foreach($sports as $sport)
                                                <option value="{{$sport->sp_id}}">{{$sport->sport_name}}</option>
                                                @endforeach
                                                    
                                        </select>
                                    </div> 
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> <span></span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" id="select-type" name="type"
                                                onchange="competition()">
                                            @foreach ($types as $type)
                                                <option value="{{$type->id}}">{{$type->type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date<span class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name='date' required="required" class="form-control" id='myDatepicker'/>
                                                @if ($errors->has('date'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                        @endif
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('venue') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="venue">Venue
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="venue" required="required" class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('venue'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('venue') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description<span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="description" 
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit">Cancel</button>
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
            format: 'YYYY.MM.DD',
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('input[name=club]').on('change', function (evt) {
            const changedValue = evt.currentTarget.attributes["2"].nodeValue;
//            new HTMLFormSelect()
            console.log(changedValue);
        })


    </script>
@endsection