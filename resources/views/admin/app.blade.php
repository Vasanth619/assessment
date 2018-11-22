<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clorida Assessment</title>
    <link href="{{ asset('components/dummy-assets/common/img/favicon.png') }}" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- VENDORS -->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/ladda/dist/ladda-themeless.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/ionrangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/media/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/c3/c3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jquery-steps/demo/css/jquery.steps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-icomoon/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/cleanhtmlaudioplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/cleanhtmlvideoplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/cleanhtmlvideoplayer/src/player.css') }}">
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('vendors/spin.js/spin.js') }}"></script>
    <script src="{{ asset('vendors/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('vendors/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('vendors/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('vendors/nestable/jquery.nestable.js') }}"></script>
    <script src="{{ asset('vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js') }}"></script>
    <script src="{{ asset('vendors/datatables-responsive/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('vendors/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('vendors/d3/d3.min.js') }}"></script>
    <script src="{{ asset('vendors/c3/c3.min.js') }}"></script>
    <script src="{{ asset('vendors/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('vendors/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-countTo/jquery.countTo.js') }}"></script>
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('vendors/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js') }}"></script>
    <script src="{{ asset('vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js') }}"></script>
    <script src="{{ asset('vendors/d3-dsv/dist/d3-dsv.js') }}"></script>
    <script src="{{ asset('vendors/d3-time-format/dist/d3-time-format.js') }}"></script>
    <script src="{{ asset('vendors/techan/dist/techan.min.js') }}"></script>

    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('components/core/common/core.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/core/widgets/widgets.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/vendors/common/vendors.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/settings/common/settings.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/settings/themes/themes.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/menu-left/common/menu-left.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/menu-right/common/menu-right.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/top-bar/common/top-bar.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/footer/common/footer.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/pages/common/pages.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/ecommerce/common/ecommerce.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/apps/common/apps.cleanui.css') }}">
    <script src="{{ asset('components/menu-left/common/menu-left.cleanui.js') }}"></script>
    <script src="{{ asset('components/menu-right/common/menu-right.cleanui.js') }}"></script>
</head>
<body class="config--vertical config--borderLess config--boxed menu-left--colorful theme--light">
          @include('admin.common.menuright')
          @include('admin.common.sidebar')
          @include('admin.common.header')

          @yield('content')
    
          @include('admin.common.footer')  

</div>
</body>
</html>













