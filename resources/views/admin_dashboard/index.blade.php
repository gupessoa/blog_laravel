@extends("admin_dashboard.layouts.app")
@section("style")
    <link href=" {{asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
@endsection

@section("wrapper")
    <div class="page-wrapper">


    </div>
@endsection

@section("script")
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/js/index.js"></script>
@endsection
