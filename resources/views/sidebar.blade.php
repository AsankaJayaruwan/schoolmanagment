<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-bank"></i> <span>Isipathana AMS</span></a>
        </div>
        <!--   menu profile quick info  -->
        <div class="profile clearfix">
            <div class="profile_pic">
            {{--    <img src="{{Auth::user()->getAvatar()}}" alt="..." class="img-circle profile_img"> --}}
            </div>

            <div class="profile_info">
                <center><span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2></center>
            </div>

        </div>
        <!-- /menu profile quick info -->


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                {{--<h3>WELCOME</h3>--}}
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-group"></i> Student <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/addst') }}">Add new Student</a></li>
                            <li><a href="{{ url('/searchst') }}">Registered Student</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-group"></i>Teacher<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/addstaff')}}">Add New Teacher</a></li>
                            <li><a href="{{url('/searchstaff')}}">Registered Teacher</a></li>
                        </ul>
                    </li>
                    {{--
                    <li><a><i class="fa fa-group"></i>Coach<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/addcoach')}}">Add New Coach</a></li>
                            <li><a href="{{url('/searchcoach')}}">Registered Coach</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-group"></i>Development Committee<span
                                    class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Add New Member</a></li>
                            <li><a href="#">Registered Member</a></li>
                        </ul>
                    </li>
                    --}}
                    <li><a><i class="fa fa-dashboard"></i>Reports<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('strank')}}">Student Rank</a></li>
                            <li><a href="{{url('searchach')}}">Achievement List</a></li>
                            <li><a href="{{url('searchact')}}">Activity List</a></li>
                            <li><a href="{{url('st_house')}}">Student House List</a></li>
                            <li><a href="{{url('tr_house')}}">Teacher House List</a></li>
                            <li><a href="{{url('select_sport')}}">Select students for sports</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> House Meet <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/addHouseMeet')}}">Add House Meet</a></li>
                    <!--        <li><a href="{{url('/searchHouseMeet')}}">Add Activity</a></li> -->
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Societies <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/addsociety') }}">Add New Society</a></li>
                            <li><a href="{{ url('/searchso') }}">Registered Society</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Sports and Games <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('addsport')}}">Add New Sport</a></li>
                            <li><a href="{{url('searchsp')}}">Registered Sport</a></li>
                            <li><a href="{{url('addcoach')}}">Add New Coach</a></li>
                            <li><a href="{{url('searchcoach')}}">Registered Coach</a></li>
                            {{--
                            <li><a href="#">Add New Sub Sport</a></li>
                            <a href="#">Registered Sub Sport</a></li>
                            <li><a href="#">Add Student Pool</a></li>
                            <li><a href="#">Add Student Team</a></li>
                            --}}
                        </ul>
                    </li>
                    {{--
                    <li><a><i class="fa fa-home"></i>House<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Rahula House</a></li>
                            <li><a href="#">Iqbal House</a></li>
                            <li><a href="#">Thagor House</a></li>
                            <li><a href="#">Milton House</a></li>
                        </ul>
                    </li>
                    --}}
                    <li><a><i class="fa fa-bar-chart-o"></i>Activity<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('/addact') }}">Add Activity</a></li>
                            <li><a href="{{ url('/searchactcommon') }}">Activity Search</a></li>
                            <li><a href="{{ url('/addachievement') }}">Add Achievement</a></li>
                            <li><a href="{{ url('/searchachcommon') }}">Achievement Search</a></li>
                            <li><a href="{{ url('/addstachievement') }}">Add Student Achievement</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i>Event<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('calendar')}}">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-wrench"></i>Configuration<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            {{--<li><a href="#">School year</a></li>--}}
                            <li><a href="{{url('houses')}}">School Houses</a></li>
                            <li><a href="{{ url('/addsection') }}">School Sections</a></li>
                            <li><a href="{{ url('/addgrade') }}">School Grades</a></li>
                            <li><a href="{{ url('/addclassroom') }}">School Classes</a></li>
                            {{--<li><a href="#">Pointing System</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            {{--
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            --}}
            @if (Auth::guest() == false)
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}"
                   style="    width: 100%;"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>