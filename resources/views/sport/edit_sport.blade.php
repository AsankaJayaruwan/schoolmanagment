@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{$sport->sport_name}}</h3>
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
                                    <i class="fa fa-file"></i> Basic Information
                                </li>
                                <li>
                                    
                                </li>
                            </ol>
                        </div>
                        <div class="x_content">
                            <form id="submit-sport" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("editsport")}}">
                                {{ csrf_field() }}
                                <input type="hidden" id="id" name="id" value="{{ $sport->id }}" class="form-control">
                                <div class="form-group {{ $errors->has('sp_id') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sp_id">Sport ID
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" name="sp_id" class="form-control col-md-7 col-xs-12"
                                               value="{{$sport->sp_id}}">
                                        @if ($errors->has('sp_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('sp_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('sport_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sport Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" name="sport_name"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$sport->sport_name}}">
                                        @if ($errors->has('sport_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('sport_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('vision') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vision">Vision
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="vision" name="vision"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$sport->vision}}">
                                        @if ($errors->has('vision'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('vision') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('mission') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mission</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="mission" class="resizable_textarea form-control"
                                                  value="{{$sport->mission}}">{{$sport->mission}}</textarea>
                                        @if ($errors->has('mission'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mission') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id_mic') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic name">Name of the
                                        MIC
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <input type="text" id="mic" name="tr_id_mic"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$sport->tr_id_mic}}">
                                        @if ($errors->has('tr_id_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_mic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic-name"> <span>{{$sport->micsport->first_name}} {{$sport->micsport->last_name}}</span>
                                    </label>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id_ast_mic') ? ' has-error' : '' }}">
                                    <label for="ast-mic-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name of
                                        the assistant MIC</label>
                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <input id="aastmic" name="tr_id_ast_mic" class="form-control col-md-7 col-xs-12"
                                               type="text" value="{{$sport->tr_id_ast_mic}}">
                                         @if ($errors->has('tr_id_ast_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_ast_mic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ast-mic-name"> <span>{{$sport->astsport->first_name}} {{$sport->astsport->last_name}}</span></label>


                                </div>
                                <div class="form-group {{ $errors->has('coach_id') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="coach_name">Name of
                                        the coach
                                    </label>
                                    <div class="col-md-1 col-sm-1 col-xs-2">
                                        <input type="text" id="name2" name="coach_id"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$sport->coach_id}}">
                                        @if ($errors->has('coach_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('coach_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="coach_name"> <span>{{$sport->coachsport->first_name}} {{$sport->coachsport->last_name}}</span>
                                    </label>
                                </div>

                                <div class="form-group {{ $errors->has('formed_date') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Formed Date
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name="formed_date" id='myDatepicker'
                                                       class="form-control" value="{{$sport->formed_date}}"/>
                                                @if ($errors->has('formed_date'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('formed_date') }}</strong>
                                    </span>
                                        @endif
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
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
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
</div>
</div>

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
        
        $('#tr_id_mic').on('change', function () {
            tr_id_mic = $('#tr_id_mic').val();

            // Do validatons here
            alert('gfjd');
            $.get("{{url('viewnamesp')}}/" + tr_id_mic, function (data) {
                $('#name1').html(data);
            });
        });

        
        $('#tr_id_ast_mic').on('change', function () {
            tr_id_ast_mic = $('#tr_id_ast_mic').val();

            // Do validatons here

            $.get("{{url('viewnamesp')}}/" + tr_id_ast_mic, function (data) {
                $('#name2').html(data);
            });
        });
        
         $('#coach_id').on('change', function () {
            coach_id = $('#coach_id').val();

            // Do validatons here

            $.get("{{url('viewnamecoach')}}/" + coach_id, function (data) {
                $('#name3').html(data);
            });
        });

    </script>
@endsection