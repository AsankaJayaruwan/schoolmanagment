@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add New Society</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form id="submit-society" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postsociety")}}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('so_id') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="so-id">Society ID
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" name="so_id" required="required" value="{{old('so_id')}}"
                                               class="form-control col-md-7 col-xs-12">
                                        @if ($errors->has('so_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('so_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('society_name') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="society-name">Society
                                        Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="society_name" required="required"
                                               value="{{old('society_name')}}"
                                               class="form-control col-md-7 col-xs-12">
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
                                        <input type="text" name="vision" value="{{old('vision')}}"
                                               class="form-control col-md-7 col-xs-12">
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
                                        <textarea class="resizable_textarea form-control"
                                                  name="mission">{{old('mission')}}</textarea>
                                         @if ($errors->has('mission'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mission') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id_mic') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic name">Name of the
                                        MIC <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <input type="text" id="tr_id_mic" name="tr_id_mic"
                                               required="required" value="{{old('tr_id_mic')}}"
                                               class="form-control col-md-7 col-xs-12" placeholder="Enter Id">
                                         @if ($errors->has('tr_id_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_mic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic-name"> <span
                                                id="name1">Name will be displayed here</span>
                                    </label>
                                </div>
                                <div class="form-group {{ $errors->has('tr_id_ast_mic') ? ' has-error' : '' }}">
                                    <label for="ast-mic-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name of
                                        the assistant MIC</label>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <input id="tr_id_ast_mic" class="form-control col-md-7 col-xs-12"
                                               name='tr_id_ast_mic' type="text"
                                               required="required" value="{{old('tr_id_ast_mic')}}"
                                               placeholder="Enter Id">
                                        @if ($errors->has('tr_id_ast_mic'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tr_id_ast_mic') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ast-mic-name"> <span
                                                id="name2">Name will be displayed here</span></label>
                                </div>
                                <div class="form-group" {{ $errors->has('st_id_president') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="president-name">Name
                                        of the president <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <input type="text" id="st_id_president" name="st_id_president"
                                               value="{{old('st_id_president')}}"
                                               required="required" class="form-control col-md-7 col-xs-12"
                                               placeholder="Enter Id">
                                         @if ($errors->has('st_id_president'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_president') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="president-name"> <span id="name3">Name will be displayed here</span>
                                    </label>
                                </div>
                                <div class="form-group {{ $errors->has('st_id_secretary') ? ' has-error' : '' }}">
                                    <label for="secretary-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the secretary<span class="required">*</span></label>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <input id="st_id_secretary" class="form-control col-md-7 col-xs-12"
                                               value="{{old('st_id_secretary')}}"
                                               name='st_id_secretary' type="text" required="required"
                                               placeholder="Enter Id">
                                         @if ($errors->has('st_id_secretary'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_secretary') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="secretary-name"> <span
                                                id="name4">Name will be displayed here</span></label>
                                </div>
                                <div class="form-group {{ $errors->has('st_id_treasurer') ? ' has-error' : '' }}">
                                    <label for="treasurer-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the treasurer<span class="required">*</span></label>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <input id="st_id_treasurer" class="form-control col-md-7 col-xs-12"
                                               value="{{old('st_id_treasurer')}}"
                                               name='st_id_treasurer' type="text" required="required"
                                               placeholder="Enter Id">
                                         @if ($errors->has('st_id_treasurer'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('st_id_treasurer') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="treasurer-name"> <span
                                                id="name5">Name will be displayed here</span></label>
                                </div>
                                 {{--
                                <div class="form-group {{ $errors->has('office bearers') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Office bearers</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" name="office bearers"
                                                  placeholder='when enter the admission number name will be displayed'>{{old('office bearers')}}</textarea>
                                         @if ($errors->has('office bearers'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('office bearers') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="control-group" {{ $errors->has('office bearers') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Office bearers</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="tags_1" name="office bearers" placeholder="Enter admission numbers" type="text" class="tags form-control"/>{{old('office bearers')}}
                        </textarea>
                          @if ($errors->has('office bearers'))
                                <span class="help-block">
                                <strong>{{ $errors->first('office bearers') }}</strong>
                                </span>
                          @endif
                          <div id="suggestions-container" required="required" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div> --}}
                                <div class="form-group {{ $errors->has('formed_date') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Formed Date<span
                                               class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name="formed_date" id='myDatepicker'
                                                       value="{{old('formed_date')}}"
                                                       class="form-control" required="required"/>
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
                                <div class="form-group" >
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
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
        $(document).ready(function () {
            $('tr_id_mic').select2({});
        });
    </script>>

    <!-- Initialize datetimepicker -->
    <script>
        $('#myDatepicker').datetimepicker({
            format: 'YYYY.MM.DD',
            ignoreReadonly: true,
            allowInputToggle: true,
        });

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