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
                                    <i class="fa fa-file"></i> Basic Information
                                </li>
                                <li>
                                    <i></i> <a href="{{ url('/somemberlist') }}/{{$society->id}}/view">Society members</a>
                                </li>
                            </ol>
                        </div>
                        <div class="x_content">
                            <form id="submit-society" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="so-id">Society ID
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" name="so_id" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$society->so_id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="society-name">Society
                                        Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="society_name" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$society->society_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vision">Vision
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="vision" readonly="readonly"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$society->vision}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mission</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" readonly="readonly"
                                                  name="mission" placeholder="{{$society->mission}}"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mic name">Name of the
                                        MIC
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        {!! Form::text('tr_id_mic',isset($society->mic)?$society->mic->name():null,['class'=>'form-control', 'readonly' =>"readonly"])!!}
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="ast-mic-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name of
                                        the assistant MIC</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <!--{!! Form::text('tr_id_mic',isset($society->ast_mic)?$society->ast_mic->name():null,['class'=>'form-control', 'readonly' =>"readonly"])!!} -->
                                        <input type="text" id="name3" readonly="readonly" name="ast_mic"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="{{$society->ast_mic->first_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="president-name">Name
                                        of the president
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <input type="text" id="name3" readonly="readonly" name="st_id_president"
                                               class="form-control col-md-7 col-xs-12"
                                        placeholder="{{$society->president->first_name}} {{$society->president->last_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="secretary-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the secretary</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <input id="name4" readonly="readonly" class="form-control col-md-7 col-xs-12"
                                               name='st_id_secretary' type="text"
                                        placeholder="{{$society->secretary->first_name}} {{$society->secretary->last_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="treasurer-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name
                                        of the treasurer</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <input id="name5" readonly="readonly" class="form-control col-md-7 col-xs-12"
                                               name='st_id_treasurer' type="text"
                                        placeholder="{{$society->treasurer->first_name}} {{$society->treasurer->last_name}}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Formed Date
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name="formed_date" readonly="readonly"
                                                       id='myDatepicker' class="form-control"
                                                       placeholder="{{$society->formed_date}}"/>
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
        $('#myDatepicker').datetimepicker({
            format: 'YYYY.MM.DD'
        });


        $('#myDatepicker').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });
    </script>

@endsection