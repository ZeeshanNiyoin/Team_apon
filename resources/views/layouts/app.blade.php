<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />  
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('user/img/logo.png')}}" type="image/png" />
  <link rel="stylesheet" href="{{asset('user/css/bootstrap1.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/themefy_icon/themify-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/niceselect/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/owl_carousel/css/owl.carousel.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/gijgo/gijgo.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/font_awesome/css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/tagsinput/tagsinput.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/datepicker/date-picker.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/vectormap-home/vectormap-2.0.2.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/scroll/scrollable.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/datatable/css/jquery.dataTables.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/datatable/css/responsive.dataTables.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/datatable/css/buttons.dataTables.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/text_editor/summernote-bs4.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/morris/morris.css')}}" />
  <link rel="stylesheet" href="{{asset('user/vendors/material_icon/material-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/metisMenu.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/style1.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/colors/default.css')}}" id="colorSkinCSS" />
  <link rel="stylesheet" href="{{asset('user/css/one_release.css')}}" />  <!-- font awesome cdn start -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style')
</head>

<body class="crm_body_bg">
@yield('content')
</body>

<script src="{{asset('user/js/jquery1-3.4.1.min.js')}}"></script>
<script src="{{asset('user/js/popper1.min.js')}}"></script>
<script src="{{asset('user/js/bootstrap1.min.js')}}"></script>
<script src="{{asset('user/js/metisMenu.js')}}"></script>
<script src="{{asset('user/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('user/vendors/chartlist/Chart.min.js')}}"></script>
<script src="{{asset('user/vendors/count_up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('user/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('user/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('user/vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('user/vendors/datepicker/datepicker.js')}}"></script>
<script src="{{asset('user/vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('user/vendors/datepicker/datepicker.custom.js')}}"></script>
<script src="{{asset('user/js/chart.min.js')}}"></script>
<script src="{{asset('user/vendors/chartjs/roundedBar.min.js')}}"></script>
<script src="{{asset('user/vendors/progressbar/jquery.barfiller.js')}}"></script>
<script src="{{asset('user/vendors/tagsinput/tagsinput.js')}}"></script>
<script src="{{asset('user/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('user/vendors/am_chart/amcharts.js')}}"></script>
<script src="{{asset('user/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('user/vendors/scroll/scrollable-custom.js')}}"></script>
<script src="{{asset('user/vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('user/vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>
<script src="{{asset('user/vendors/apex_chart/apex-chart2.js')}}"></script>
<script src="{{asset('user/vendors/apex_chart/apex_dashboard.js')}}"></script>
<script src="{{asset('user/vendors/chart_am/core.js')}}"></script>
<script src="{{asset('user/vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('user/vendors/chart_am/animated.js')}}"></script>
<script src="{{asset('user/vendors/chart_am/kelly.js')}}"></script>
<script src="{{asset('user/vendors/chart_am/chart-custom.js')}}"></script>
<script src="{{asset('user/js/dashboard_init.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/model.js')}}"></script>
<script src="{{asset('js/new_release_model.js')}}"></script>
<script src="{{asset('js/jquery1-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper1.min.js')}}"></script>
<script src="{{asset('js/bootstrap1.min.js')}}"></script>
<script src="{{asset('js/metisMenu.js')}}"></script>
<script src="{{asset('vendors/chartlist/Chart.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('vendors/scroll/scrollable-custom.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('vendors/chartjs/chartjs_init.js')}}"></script>
<script src="https://cdn.jsdeliver.net/npm/apexcharts"></script>
<script src="{{asset('js/dailytrends.js')}}"></script>
<script src="{{asset('js/jquery1-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper1.min.js')}}"></script>
<script src="{{asset('js/bootstrap1.min.js')}}"></script>
<script src="{{asset('js/metisMenu.js')}}"></script>
<script src="{{asset('vendors/count_up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendors/chartlist/Chart.min.js')}}"></script>
<script src="{{asset('vendors/count_up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datepicker/datepicker.js')}}"></script>
<script src="{{asset('vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('vendors/datepicker/datepicker.custom.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('vendors/chartjs/roundedBar.min.js')}}"></script>
<script src="{{asset('vendors/progressbar/jquery.barfiller.js')}}"></script>
<script src="{{asset('vendors/tagsinput/tagsinput.js')}}"></script>
<script src="{{asset('vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('vendors/am_chart/amcharts.js')}}"></script>
<script src="{{asset('vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('vendors/scroll/scrollable-custom.js')}}"></script>
<script src="{{asset('vendors/vectormap-home/vectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('vendors/vectormap-home/vectormap-world-mill-en.js')}}"></script>
<script src="{{asset('vendors/apex_chart/apex-chart2.js')}}"></script>
<script src="{{asset('vendors/apex_chart/apex_dashboard.js')}}"></script>
<script src="{{asset('vendors/chart_am/core.js')}}"></script>
<script src="{{asset('vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('vendors/chart_am/animated.js')}}"></script>
<script src="{{asset('vendors/chart_am/kelly.js')}}"></script>
<script src="{{asset('vendors/chart_am/chart-custom.js')}}"></script>
<script src="{{asset('js/dashboard_init.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/one_release.js')}}"></script>
<script src="{{asset('js/model.js')}}"></script>

@yield('script')
</html>