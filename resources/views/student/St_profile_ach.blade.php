@extends('sidebar_header')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @include('messages.messages')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Student Profile</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                {{--<div class="col-md-3 col-sm-3 col-xs-12 profile_left">--}}
                <div class="col-md-3 profile_left">
                    <div class="x_panel">
                        <div class="row">
                            <h3 class="text-center">Student ID : {{$student->st_id}}</h3>
                        </div>
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" src=" {{$student->getAvatar()}}" alt="Avatar"
                                     title="Change the avatar">
                            </div>
                        </div>
                        <h3> {{$student->getName()}}</h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i>

                                {{$student->getAddress()}}
                            </li>
                        </ul>
                        {{--
                                                <a class="btn btn-success">
                                                    <i class="fa fa-edit m-right-xs"></i>
                                                    Edit Profile
                                                </a>
                        --}}
                        <br>

                        <!-- start skills -->
                        {{--
                        <h4>Skills</h4>
                        <ul class="list-unstyled user_data">
                            <li>
                                <p>Web Applications</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" chartData-transitiongoal="50"
                                         aria-valuenow="49" style="width: 50%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Website Design</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" chartData-transitiongoal="70"
                                         aria-valuenow="69" style="width: 70%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Automation &amp; Testing</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" chartData-transitiongoal="30"
                                         aria-valuenow="29" style="width: 30%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>UI / UX</p>
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" chartData-transitiongoal="50"
                                         aria-valuenow="49" style="width: 50%;"></div>
                                </div>
                            </li>
                        </ul>
                        <!-- end of skills -->
                        --}}

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#infoTab" id="home-tab" role="tab"
                                       data-toggle="tab" aria-expanded="true">
                                        Personal Information
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#healthInfo" role="tab" id="profile-tab"
                                       data-toggle="tab" aria-expanded="false">
                                        Health Information
                                    </a>
                                </li>

                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="infoTab"
                                     aria-labelledby="home-tab">
                                    <!-- start recent activity -->
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label">Full Name</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" readonly
                                                               value="{{$student->getFullName()}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">Contact Number</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" readonly
                                                               value="{{$student->contact}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">Date of Birth</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control  " readonly
                                                               value="{{$student->DoB}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">Email</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" readonly
                                                               value="{{$student->email}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">Living City</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" readonly
                                                               value="{{$student->city}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">Address</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" readonly
                                                               value="{{$student->address}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class=" form-horizontal">
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <label for="name" class="control-label ">House</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control  " readonly
                                                               value="{{$student->house->house_name}}" id="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- end recent activity -->

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="healthInfo"
                                     aria-labelledby="profile-tab">


                                    <div class="col-md-12 ">
                                        <div class=" form-horizontal">
                                            <div class="form-group ">
                                                <div class="col-md-3">
                                                    <label for="name" class="control-label ">Height</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly
                                                           value="{{$student->height?$student->height:"Not Available"}}"
                                                           id="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class=" form-horizontal">
                                            <div class="form-group ">
                                                <div class="col-md-3">
                                                    <label for="name" class="control-label ">Weight</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly
                                                           value="{{$student->weight?$student->weight:"Not Available"}}"
                                                           id="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class=" form-horizontal">
                                            <div class="form-group ">
                                                <div class="col-md-3">
                                                    <label for="name" class="control-label ">Running Speed</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly
                                                           value="{{$student->running_speed?$student->running_speed:"Not Available"}}"
                                                           id="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class=" form-horizontal">
                                            <div class="form-group ">
                                                <div class="col-md-3">
                                                    <label for="name" class="control-label ">Sickness</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly
                                                           value="{{$student->sickness?$student->sickness:"Not Available"}}"
                                                           id="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end user projects -->

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="x_panel">

                        <p>
                            {{$student}}
                        </p>
                    </div>
                    --}}
                </div>
            </div>

        </div>
        <div class="container">
            <div class="x_panel">


                <div class="col-md-6">
                    <h3 class="text-center">Sports Achievements</h3>
                    <div id="graph_bar_sport" style="width:100%; height:280px;"></div>

                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Society Achievements</h3>
                    <div id="graph_bar_society" style="width:100%; height:280px;"></div>

                </div>

                {{--
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#sports_achievements" id="home-tab" role="tab"
                                               data-toggle="tab" aria-expanded="true">
                                                Sport Achievements
                                            </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#society_achievements" role="tab" id="profile-tab"
                                               data-toggle="tab" aria-expanded="false">
                                                Society Achievements
                                            </a>
                                        </li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="sports_achievements"
                                             aria-labelledby="home-tab">

                                            <!-- start recent activity -->
                                            <div id="graph_bar_sport" style="width:100%; height:280px;"></div>
                                            <!-- end recent activity -->

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="society_achievements"
                                             aria-labelledby="profile-tab">

                                            <!-- start user projects -->

                                            <div id="graph_bar_society" style="width:100%; height:280px;"></div>

                                            <!-- end user projects -->

                                        </div>
                                    </div>

                            </div>
                                    --}}
            </div>
        </div>

    </div>
@endsection
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->




@section('script_content')
    <script src="{{url('vendors/raphael/raphael.js')}}"></script>
    <script src="{{url('vendors/morris.js/morris.js')}}"></script>
    <script>
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#dob').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        var sport_chartData = {!! $student_sport_data !!} ;
        var society_chartData = {!! $student_society_data !!} ;


        var text = "<div>" +
            "<h1 class='text-center'> No Data To View </h1> " +
            "</div>";

        if (sport_chartData.length !== 0 && $('#graph_bar_sport').length) {

            Morris.Bar({
                element: 'graph_bar_sport',
                data: sport_chartData,
                xkey: 'sport_name',
                ykeys: ['marks'],
                labels: ['Marks'],
                barRatio: 0.4,
                barColors: ['#0BA206', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });

        } else {
            $('#graph_bar_sport').append(text);

        }

        if (society_chartData.length !== 0 && $('#graph_bar_society').length) {

            Morris.Bar({
                element: 'graph_bar_society',
                data: society_chartData,
                xkey: 'society_name',
                ykeys: ['marks'],
                labels: ['Marks'],
                barRatio: 0.4,
                barColors: ['#3498DB', '#34495E', '#ACADAC', '#3498DB'],
                xLabelAngle: 35,
                hideHover: 'auto',
                resize: true
            });

        } else {
            $('#graph_bar_society').append(text);

        }

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href"); // activated tab
            // alert(target);
            if (target === '#graph_bar_society') {

                Morris.Bar({
                    element: 'graph_bar_society',
                    data: society_chartData,
                    xkey: 'society_name',
                    ykeys: ['marks'],
                    labels: ['Marks'],
                    barRatio: 0.4,
                    barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                    xLabelAngle: 35,
                    hideHover: 'auto',
                    resize: true
                });
            }
            if (target === '#graph_bar_sport') {

                Morris.Bar({
                    element: 'graph_bar_sport',
                    data: sport_chartData,
                    xkey: 'sport_name',
                    ykeys: ['marks'],
                    labels: ['Marks'],
                    barRatio: 0.4,
                    barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                    xLabelAngle: 35,
                    hideHover: 'auto',
                    resize: true
                });

            }

        });


    </script>
@endsection
  