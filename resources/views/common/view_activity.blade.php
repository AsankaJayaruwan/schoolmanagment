@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Activity</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <form id="type-form" data-parsley-validate class="form-horizontal form-label-left">
                                {{--{{ csrf_field() }}--}}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="act-name">Activity
                                        Name
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="activity_name" value="{{$activity->activity_name}}" class="form-control col-md-7 col-xs-12" disabled="disabled">
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select the Society/
                                        Sport<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="" value="option1" name="so_id"> Society
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="option2" name="sp_id"> Sport
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sport_society">Sport/Society
                                        ID <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" name="so/sp_id" class="form-control col-md-7 col-xs-12"
                                               placeholder="Enter Id">
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> <span>Name will be displayed here</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" id="select-type" name="type"
                                                onchange="competition()">
                                            <option value="1">Monthly meeting</option>
                                            <option value="2">Practices</option>
                                            <option value="3">Event</option>
                                            <option value="4">Competition</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date<span class="required">*</span>
                                    </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date'>
                                                <input type='text' name='date' class="form-control" id='myDatepicker'/>
                                                <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Participated
                                        Students</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" name="st_id"
                                                  placeholder='when enter the admission number name will be displayed'></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="venue">Venue
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="venue" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description<span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="description" name="description" required="required"
                                               class="form-control col-md-7 col-xs-12">
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