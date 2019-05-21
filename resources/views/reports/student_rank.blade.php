@extends('sidebar_header')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Student Leader Board</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            {!! Form::open(['method'=>'get']) !!}
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">

                        <div class="col-md-3">
                            {!! Form::select('age_group',$age_group,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('sport_selection',$sports_selection,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('society_selection',$society_selection,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('year_selection',$year_selection,null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="pull-right">
                            <input type="submit" value="Search" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a data-toggle="tab" href="#sports">
                        Sports
                    </a>
                </li>
                <li><a data-toggle="tab" href="#society">Society</a></li>
            </ul>

            <div class="tab-content">
                <div id="sports" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">

                                    <table id="mydatatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Student Class</th>
                                            <th>Sports Name</th>
                                            <th>Total Achievements</th>
                                            <th>Ranking</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @for($i =0; count($sport_activities) > $i;$i++ )
                                            <tr>
                                                <td>{{$sport_activities[$i]->st_id}}</td>
                                                <td>{{empty($sport_activities[$i]->student)?'':$sport_activities[$i]->student->getName()}}</td>
                                                <td>{{empty($sport_activities[$i]->student) && empty($sport_activities[$i]->student->classroom) ?'':$sport_activities[$i]->student->classroom->classroom_name}}</td>
                                                <td>{{$sport_activities[$i]->sport_name}}</td>
                                                <td>{{$sport_activities[$i]->marks}}</td>
                                                {{--                                                <td>{{$sport_activities[$i]->Rank_ID}}</td>--}}
                                                <td>{{$i + 1}}</td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="society" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Student Class</th>
                                            <th>Society Name</th>
                                            <th>Total Achievements</th>
                                            <th>Ranking</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i = 0; count($society_activities) > $i;$i++)
                                            <tr>
                                                <td>{{$society_activities[$i]->st_id}}</td>
                                                <td>{{empty($society_activities[$i]->student)?'':$society_activities[$i]->student->getName()}}</td>
                                                <td>{{empty($society_activities[$i]->student) && empty($society_activities[$i]->student->classroom) ?'':$society_activities[$i]->student->classroom->classroom_name}}</td>
                                                <td>{{$society_activities[$i]->society_name}}</td>
                                                <td>{{$society_activities[$i]->marks}}</td>
                                                {{--                                                <td>{{$sport_activities[$i]->Rank_ID}}</td>--}}
                                                <td>{{$i+1}}</td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_content')
    <script>
        (function ($) {
            $('table').dataTable({
                "order": [[4, 'asc']]
            });
        })($)

    </script>
@endsection
