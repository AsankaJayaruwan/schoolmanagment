@extends('sidebar_header')
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="row top_tiles">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$student_count}}</div>
                                    <div>Students </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchst")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$teacher_count}}</div>
                                    <div>Teachers </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchstaff")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$society_count}}</div>
                                    <div>Societies </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchso")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$sport_count}}</div>
                                    <div>Sports</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchsp")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        <div>
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$activity_count}}</div>
                                    <div>Activities</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchact")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$achievement_count}}</div>
                                    <div>Achievements</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{url("searchach")}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row"> 
        
        <table id="mydatatable" class="table tableTeacher table-striped table-bordered col-lg-3 col-md-6" >
                            <thead>
                            <tr>
                                <th><h2> Most Recent Activities </h2></th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach ($recent_activities as $recent_activity)
                                <tr>
                                    <td> {{$recent_activity->activity_name}} </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
        </div>
        
                         

        
    </div>

    </div>             
                      
                    @endsection

@section('script_content')
@endsection 