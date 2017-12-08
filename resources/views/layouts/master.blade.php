<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} </title>
    <!-- vendor css -->
    <link href="/bracketplus/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/bracketplus/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/bracketplus/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="/bracketplus/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="/bracketplus/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="/bracketplus/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/bracketplus/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    @include('layouts.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    @yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="/bracketplus/lib/jquery/jquery.js"></script>
    <script src="/bracketplus/lib/popper.js/popper.js"></script>
    <script src="/bracketplus/lib/bootstrap/bootstrap.js"></script>
    <script src="/bracketplus/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="/bracketplus/lib/moment/moment.js"></script>
    <script src="/bracketplus/lib/jquery-ui/jquery-ui.js"></script>
    <script src="/bracketplus/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="/bracketplus/lib/peity/jquery.peity.js"></script>
    <script src="/bracketplus/lib/d3/d3.js"></script>
    <script src="/bracketplus/lib/rickshaw/rickshaw.min.js"></script>
    <script src="/bracketplus/lib/Flot/jquery.flot.js"></script>
    <script src="/bracketplus/lib/Flot/jquery.flot.resize.js"></script>
    <script src="/bracketplus/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="/bracketplus/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="/bracketplus/lib/echarts/echarts.min.js"></script>
    <script src="/bracketplus/lib/select2/js/select2.full.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
    <script src="/bracketplus/lib/gmaps/gmaps.js"></script>

    <script src="/bracketplus/js/bracket.js"></script>
    <script src="/bracketplus/js/map.shiftworker.js"></script>
    <script src="/bracketplus/js/ResizeSensor.js"></script>
    <script src="/bracketplus/js/dashboard.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>

<!-- Mirrored from themepixels.me/bracketplus/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2017 07:11:48 GMT -->
</html>
