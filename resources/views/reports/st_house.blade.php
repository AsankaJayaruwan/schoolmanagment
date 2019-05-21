@extends('sidebar_header')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>House
                    <small>Student list</small>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <div class="form-group">
                            <form id="submit-society" data-parsley-validate class="form-horizontal form-label-left"
                                  method="post" action="{{url("st_house")}}">
                                {{ csrf_field() }}
                                <div col-md-8 col-sm-8 col-xs-8>
                                    <div class="form-group">
                                    <label for='house' class="control-label col-md-2 col-sm-2 col-xs-2">Select House</label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <select name='house'  class='form-control'>
                                            @foreach($st_houses as $st_house)
                                            <option value="{{$st_house->id}}">{{$st_house->house_name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group"></div>
                                    <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-2 ">Select Class</label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <select  name='classroom' class='form-control'>
                                            @foreach($st_classes as $st_class)
                                            <option value="{{$st_class->id}}">{{$st_class->classroom_name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-7">
                                        <input type="hidden" >
                                        <button type="submit" class="btn btn-success">Search</button>
                                    </div>
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
<!-- /page content -->

@endsection

@section('script_content')

@endsection