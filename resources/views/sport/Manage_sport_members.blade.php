@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Manage Sport Members of {{$sport->sport_name}} club</h3>
                </div>

    {{--            <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ol class="breadcrumb">
                                <li>
                                    <i></i> Add members
                                </li>
                                
                            </ol>
                        </div>
                        <div class="x_content">
                            <form id="submit-sport" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("postSportMem")}}">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                             
                        <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Admission numbers</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" name="st_id" type="text" required="required" class="tags form-control"/>
                          <div id="suggestions-container" required="required" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
                                </div>
                            </div>
                            <div class="row">

                                <br> <br>
                                <div class="col-md-6 col-sm-6 col-xs-12  col-xs-offset-3">
                                        <button class="btn btn-primary" type="reset">Cancel</button>
                                        <input type="hidden" name="sp_id" value="{{$sport->sp_id}}">
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
    </div>

@endsection


@section('script_content')
@endsection
