<!DOCTYPE html>
<html lang="en">
@include('site_header')

<body class="nav-md">
<div class="container body">
    <div class="main_container">

    @include('sidebar')

    <!-- sidebar menu -->
        <!-- top navigation -->
    @include('top_nav')
    <!-- /top navigation -->

        <!-- page content -->

    @yield('content')

    <!-- page content ends -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ URL::asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::asset('vendors/nprogress/nprogress.js') }}"></script>  
    <!-- jQuery custom content scroller -->
    <script src="{{ URL::asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{ URL::asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ URL::asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{ URL::asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- jquery.inputmask -->
    <script src="{{ URL::asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- jQuery Knob -->
    <script src="{{ URL::asset('vendors/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ URL::asset('vendors/iCheck/icheck.min.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ URL::asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Ion.RangeSlider -->
    <script src="{{ URL::asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Cropper -->
    <script src="{{ URL::asset('vendors/cropper/dist/cropper.min.js') }}"></script>

    <!-- FullCalendar -->
    <script src="{{ URL::asset('vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ URL::asset('vendors/select2/dist/js/select2.min.js') }}"></script>


    <!-- Datatables -->
    <script src="{{ URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>


@yield('script_content')
<!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('js/custom.js') }}"></script>

</div>
</body>
</html>
