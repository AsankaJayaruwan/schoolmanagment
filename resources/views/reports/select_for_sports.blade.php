@extends('sidebar_header')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sports
                    <small>Select students for sports</small>
                </h3>
            </div>
        </div>                                    
        <div class="row">
            
            <form class="form-inline" method="post" action="{{url("sport_report")}}"> 
                {{ csrf_field() }}
            <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="text" id="first-name" name="sport" placeholder="Enter the sports"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="purpose" name="purpose" placeholder="Enter the purpose"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                </div><br><br><br><br><br><br><br>
            <form class="form-inline">               
                <div class="col-md-12 col-sm-12 col-xs-12">                    
                    <div class="col-md-3 col-sm-3 col-xs-9">
                        <input placeholder="Height (in cm)" class="form-control" type="text"
                               name="height"
                               step="3">
                    </div>
                    <div class="col-md-3 col-sm-3  col-xs-9">
                        <input placeholder="Weight (in Kg)" class="form-control" type="text"
                               name="weight"
                               step="3">
                    </div>
                    <div class="col-md-3 col-sm-3  col-xs-9">
                        <input placeholder="Running Speed" class="form-control"
                               type="text"
                               name="running_speed" step="3">
                    </div>
                    <div class="col-md-3 col-sm-3  col-xs-9">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection

@section('script_content')

@endsection