<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Isipathana College </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">

{{-- TODO Cut Libraries added after here --}}
<!-- jQuery custom content scroller -->
    <link href="{{ URL::asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
          rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
          rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
          rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- Select2 -->
    <link href="{{ URL::asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">


    <!-- FullCalendar -->
    <link href="{{ URL::asset('vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet" media="print">

{{-- TODO Cut Libraries added until here --}}
    @yield('css')
<!-- Custom Theme Style -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    
    <link href="{{ URL::asset('css/search.css') }}" rel="stylesheet">
    
    <link href="{{ URL::asset('css/alert.css') }}" rel="stylesheet">
    
</head>