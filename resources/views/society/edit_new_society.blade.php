@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{$society->society_name}} society</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <form id="submit-society" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url("editSociety")}}">
                                {{ csrf_field() }}
                                    
                                <input type="hidden" id="id" name="id" value="{{ $society->id }}" class="form-control">
                                
                                <div class="form-group {{ $errors->has('so_id') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="so-id">Society ID
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" name="so_id" class="form-control col-md-7 col-xs-12"
                                               value="{{$society->so_id}}">
                                        @if ($errors->has('so_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('so_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('society_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="society-name">Society
                                        Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="society_name" class="form-control col-md-7 col-xs-12"
                                               value="{{$society->society_name}}">
                                        @if ($errors->has('society_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('society_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('vision') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vision">Vision
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="vision" class="form-control col-md-7 col-xs-12"
                                               value="{{$society->vision}}">
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
                                        <textarea class="resizable_textarea form-control" name="mission">{{$society->mission}}</textarea>
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
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" id="name1" name="tr_id_mic" class="form-control col-md-7 col-xs-12"
                                               value="{{$society->tr_id_mic}}">
                                        @if ($errors->has('tr_id_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_mic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic-name">
                                        <span id="name1">{{$mic_name->first_name}} {{$mic_name->last_name}}</span></label>
                                    </label>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id_ast_mic') ? ' has-error' : '' }}">
                                    <label for="ast-mic-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name of
                                        the assistant MIC</label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input id="name2" class="form-control col-md-7 col-xs-12"
                                               name='tr_id_ast_mic' type="text" value="{{$society->tr_id_ast_mic}}">
                                        @if ($errors->has('tr_id_ast_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_ast_mic') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ast-mic-name">
                                        <span id="name2">{{$ast_name->first_name}} {{$ast_name->last_name}}</span></label>
                                    </label>


                                </div>
                                <div class="form-group {{ $errors->has('st_id_president') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="president-name">Name
                                        of the president
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" id="name3" name="st_id_president"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{$society->st_id_president}}">
                                        @if ($errors->has('st_id_president'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_president') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" name='st_id_president'
                                           for="president-name"> <span id="name3">{{$pres_name->first_name}} {{$pres_name->last_name}}</span>
                                    </label>
                                </div>
                                <div class="form-group {{ $errors->has('st_id_secretary') ? ' has-error' : '' }}">
                                    <label for="secretary-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the secretary</label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input id="name4" class="form-control col-md-7 col-xs-12"
                                               name='st_id_secretary' type="text"
                                               value="{{$society->st_id_secretary}}">
                                        @if ($errors->has('st_id_secretary'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_secretary') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="secretary-name">
                                        <span id="name4">{{$sec_name->first_name}} {{$sec_name->last_name}}</span></label>
                                </div>
                                <div class="form-group {{ $errors->has('st_id_treasurer') ? ' has-error' : '' }}">
                                    <label for="treasurer-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the treasurer</label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input id="name5" class="form-control col-md-7 col-xs-12"
                                               name='st_id_treasurer' type="text"
                                               value="{{$society->st_id_treasurer}}">
                                        @if ($errors->has('st_id_treasurer'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_treasurer') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="treasurer-name">
                                        <span id="name5">{{$tres_name->first_name}} {{$tres_name->last_name}}</span></label>
                                </div>
                         {{--       <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Office bearers</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control"
                                                  name="office bearers"
                                                  placeholder="">{{$society->office_bearers}}</textarea>
                                    </div>
                                </div> --}}
                                <div class="form-group {{ $errors->has('formed_date') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Formed Date
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name="formed_date"
                                                       id='myDatepicker' class="form-control"
                                                       value="{{$society->formed_date}}"/>
                                                 @if ($errors->has('formed_date'))
                                            <span class="help-block">Formed Date
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
                                        <button class="btn btn-primary" type="button">Cancel</button>
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
       
        $('#tr_id_mic').on('change', function () {
            tr_id_mic = $('#tr_id_mic').val();

            // Do validatons here

            $.get("{{url('viewnamesotr')}}/" + tr_id_mic, function (data) {
                $('#name1').html(data);
            });
        });

        $('#tr_id_ast_mic').on('change', function () {
            tr_id_mic = $('#tr_id_ast_mic').val();

            // Do validatons here

            $.get("{{url('viewnamesotr')}}/" + tr_id_mic, function (data) {
                $('#name2').html(data);
            });
        });

        $('#st_id_president').on('change', function () {
            st_id = $('#st_id_president').val();


            // Do validatons here

            $.get("{{url('viewnamesost')}}/" + st_id, function (data) {
                $('#name3').html(data);
            });
        });

        $('#st_id_secretary').on('change', function () {
            st_id = $('#st_id_secretary').val();

            // Do validatons here

            $.get("{{url('viewnamesost')}}/" + st_id, function (data) {
                $('#name4').html(data);
            });
        });
        $('#st_id_treasurer').on('change', function () {
            st_id = $('#st_id_treasurer').val();

            // Do validatons here

            $.get("{{url('viewnamesost')}}/" + st_id, function (data) {
                $('#name5').html(data);
            });
        });
    </script>


@endsection