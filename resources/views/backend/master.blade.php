<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('backend/assets/css/animate-css/animate.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ asset('backend/assets/css/lobipanel/lobipanel.min.css') }}" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
      
        <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr/toastr.min.css') }}" media="screen" >
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/js/DataTables/datatables.min.css') }}"/>

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{ asset('backend/assets/js/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            
            	@include('backend.common.top_navbar')
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    @include('backend.common.sidebar')
                    <!-- /.left-sidebar -->

                    @yield('home')
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="{{ asset('backend/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pace/pace.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lobipanel/lobipanel.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/iscroll/iscroll.js') }}"></script>

        <!-- ========== PAGE JS FILES ========== -->
       {{--  <script src="{{ asset('backend/assets/js/prism/prism.js') }}"></script> --}}
        <script src="{{ asset('backend/assets/js/waypoint/waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/counterUp/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('backend/assets/js/amcharts/serial.js') }}"></script>
        <script src="{{ asset('backend/assets/js/amcharts/plugins/export/export.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('backend/assets/js/amcharts/plugins/export/export.css') }}" type="text/css" media="all" />
        <script src="{{ asset('backend/assets/js/amcharts/themes/light.js') }}"></script>

        <!-- ========== THEME JS ========== -->
        <script src="{{ asset('backend/assets/js/main.js') }}"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // chart2
                var chart2 = AmCharts.makeChart( "chart2", {
                  "type": "serial",
                  "theme": "light",
                  "fontFamily": "Poppins",
                  "dataProvider": [ {
                    "revenue": "500012",
                    "year": 2001
                  },{
                    "revenue": "623012",
                    "year": 2002
                  },{
                    "revenue": "756895",
                    "year": 2003
                  },{
                    "revenue": "846658",
                    "year": 2004
                  },{
                    "revenue": "954284",
                    "year": 2005
                  },{
                    "revenue": "1024364",
                    "year": 2006
                  }, {
                    "revenue": "1125975",
                    "year": 2007
                  }, {
                    "revenue": "1236364",
                    "year": 2008
                  }, {
                    "revenue": "1352024",
                    "year": 2009
                  }, {
                    "revenue": "1458256",
                    "year": 2010
                  }, {
                    "revenue": "1568964",
                    "year": 2011
                  }, {
                    "revenue": "1592035",
                    "year": 2012
                  }, {
                    "revenue": "1794678",
                    "year": 2013
                  }, {
                    "revenue": "1865598",
                    "year": 2014
                  }, {
                    "revenue": "1962587",
                    "year": 2015
                  }, {
                    "revenue": "2225468",
                    "year": 2016
                  }, {
                    "revenue": "2557487",
                    "year": 2017
                  } ],
                  "valueAxes": [ {
                    "gridColor": "#FFFFFF",
                    "gridAlpha": 0.2,
                    "dashLength": 0,
                    "title": "Generated Revenue, USD"
                  } ],
                  "gridAboveGraphs": true,
                  "startDuration": 1,
                  "graphs": [ {
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.8,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "revenue"
                  } ],
                  "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                  },
                  "categoryField": "year",
                  "categoryAxis": {
                    "gridPosition": "start",
                    "gridAlpha": 0,
                    "tickPosition": "start",
                    "tickLength": 20,
                    "title": "Years"
                  },
                  "export": {
                    "enabled": true
                  }

                } );

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
