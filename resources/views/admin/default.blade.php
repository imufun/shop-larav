<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- Custom CSS -->
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}?=v2" rel="stylesheet">
    <link href="{{asset('admin/assets/libs/select2/dist/css/select2.min.css')}}" rel="stylesheet"> 
    
</head>

<body>

<div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        @include('admin.dashboard.layout.partials.navbar')
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        @include('admin.dashboard.layout.partials.sitebar')
    </aside>
    @yield('home_content')
</div>


<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->

<script src=" {{asset('admin/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>

<script src="{{asset('admin/dist/js/custom.js')}}"></script>
<script src=" {{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src=" {{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src=" {{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src=" {{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src=" {{asset('admin/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src=" {{asset('admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<!--This page JavaScript -->
<!-- <script src=" admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src=" {{asset('admin/assets/libs/flot/excanvas.js')}}"></script>

<script src=" {{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
<script src=" {{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src=" {{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src=" {{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src=" {{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src=" {{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="  {{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>
</body>

</html>