<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clean</title>
    <link href="../../components/dummy-assets/common/img/favicon.png" rel="shortcut icon">
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
<div class="menu-right">
    <div class="menu-right__inner">
        <div class="menu-right__header">
            <span class="fa fa-times pull-right menu-right__action--menu-toggle"><!-- --></span>
            Theme Settings
        </div>
        <div class="menu-right__content">
            <div class="menu-right__descr">
                This module "block-menu-right" gives possibility to construct custom blocks with any widgets, components and elements inside, like this theme settings
            </div>
            <div class="menu-right__label">
                Theme Style
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value=""> Dark
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value="theme--light"> Light
                        </label>
                    </div>
                </div>
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value="theme--green"> Green
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value="theme--blue"> Blue
                        </label>
                    </div>
                </div>
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value="theme--red"> Red
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-theme" value="theme--orange"> Orange
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Boxed Layout
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-boxed" value="config--boxed"> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-boxed" value=""> Off
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Fixed Top Bar
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-topbar" value=""> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-topbar" value="config--unfixed"> Off
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Borderless Cards
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-borderLess" value="config--borderLess"> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-borderLess" value=""> Off
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Colorful Menu
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-colorful" value="menu-left--colorful"> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-colorful" value=""> Off
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Menu Shadow
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-shadow" value="menu-left--shadow"> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-shadow" value=""> Off
                        </label>
                    </div>
                </div>
            </div>
            <div class="menu-right__label">
                Squared Corners
            </div>
            <div class="menu-right__setting menu-right--example-option">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-corners" value="config--squared-corners"> On
                        </label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-default">
                            <input type="radio" name="options-corners" value=""> Off
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="menu-left">
    <div class="menu-left__lock menu-left__action--menu-toggle">
        <div class="menu-left__pin-button">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu-left__logo">
        <a href="dashboards-alpha.html">
            <img src="{{ asset('components/dummy-assets/common/img/logo-inverse.png') }}" alt="" />
        </a>
    </div>
    <div class="menu-left__inner">
        <ul class="menu-left__list menu-left__list--root">
            <li class="menu-left__item">
                <a href="javascript: void(0);" class="menu-right__action--menu-toggle">
                    <span class="menu-left__icon icmn-cog utils__spin-delayed--pseudo-selector"></span>
                    Theme Settings
                </a>
            <li class="menu-left__item menu-left__item--active">
                <a href="https://docs.cleanuitemplate.com/" target="_blank">
                    <span class="menu-left__icon icmn-books"></span>
                    Documentation
                </a>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item">
                <a href="dashboards-alpha.html">
                    <span class="menu-left__icon icmn-home"></span>
                    <span class="badge badge-primary pull-right">New</span>
                    Dashboard Alpha
                </a>
            </li>
            <li class="menu-left__item">
                <a href="dashboards-beta.html">
                    <span class="menu-left__icon icmn-home"></span>
                    Dashboard Beta
                </a>
            </li>
            <li class="menu-left__item">
                <a href="dashboards-crypto.html">
                    <span class="menu-left__icon icmn-home"></span>
                    <span class="badge badge-primary pull-right">New</span>
                    Dashboard Crypto
                </a>
            </li>
            <li class="menu-left__item">
                <a href="dashboards-gamma.html">
                    <span class="menu-left__icon icmn-home"></span>
                    <span class="badge badge-primary pull-right">New</span>
                    Dashboard Gamma
                </a>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-file-text"></span>
                    Default Pages
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="pages-login-alpha.html">
                            <span class="menu-left__icon">LA</span>
                            Login Alpha
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-login-beta.html">
                            <span class="menu-left__icon">LB</span>
                            Login Beta
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-register.html">
                            <span class="menu-left__icon">R</span>
                            Register
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-lockscreen.html">
                            <span class="menu-left__icon">LS</span>
                            Lockscreen
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-pricing-tables.html">
                            <span class="menu-left__icon">PT</span>
                            Pricing Tables
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-invoice.html">
                            <span class="menu-left__icon">I</span>
                            Invoice
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-page-404.html">
                            <span class="menu-left__icon">P4</span>
                            Page 404
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="pages-page-500.html">
                            <span class="menu-left__icon">P5</span>
                            Page 500
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-download"></span>
                    Ecommerce
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="ecommerce-dashboard.html">
                            <span class="menu-left__icon">DB</span>
                            Dashboard
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-products-catalog.html">
                            <span class="menu-left__icon">PC</span>
                            Products Catalog
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-product-details.html">
                            <span class="menu-left__icon">PD</span>
                            Product Details
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-product-edit.html">
                            <span class="menu-left__icon">PE</span>
                            Product Edit
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-products-list.html">
                            <span class="menu-left__icon">PL</span>
                            Products List
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-orders.html">
                            <span class="menu-left__icon">O</span>
                            Orders
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="ecommerce-cart-checkout.html">
                            <span class="menu-left__icon">CC</span>
                            Cart / Checkout
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-list"></span>
                    Forms
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="forms-basic-form-elements.html">
                            <span class="menu-left__icon">BF</span>
                            Basic Form Elements
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-buttons.html">
                            <span class="menu-left__icon">B</span>
                            Buttons
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-dropdowns.html">
                            <span class="menu-left__icon">D</span>
                            Dropdowns
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-selectboxes.html">
                            <span class="menu-left__icon">SB</span>
                            Selectboxes
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-checkboxes-radio.html">
                            <span class="menu-left__icon">CR</span>
                            Checkboxes / Radio
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-form-wizard.html">
                            <span class="menu-left__icon">FW</span>
                            Form Wizard
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-form-validation.html">
                            <span class="menu-left__icon">FV</span>
                            Form Validation
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-autocomplete.html">
                            <span class="menu-left__icon">AC</span>
                            Autocomplete
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-input-mask.html">
                            <span class="menu-left__icon">IM</span>
                            Input Mask
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-file-uploads.html">
                            <span class="menu-left__icon">FU</span>
                            File Uploads
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="forms-extras.html">
                            <span class="menu-left__icon">E</span>
                            Extras
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-loop"></span>
                    Components
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="components-date-picker.html">
                            <span class="menu-left__icon">DP</span>
                            Date Picker
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-calendar.html">
                            <span class="menu-left__icon">CL</span>
                            Calendar
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-carousel.html">
                            <span class="menu-left__icon">CR</span>
                            Carousel
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-media-players.html">
                            <span class="menu-left__icon">MP</span>
                            Media Players
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-slider.html">
                            <span class="menu-left__icon">SL</span>
                            Slider
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-modal.html">
                            <span class="menu-left__icon">M</span>
                            Modal
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-tooltips-popovers.html">
                            <span class="menu-left__icon">TP</span>
                            Tooltips & Popovers
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-notifications-alerts.html">
                            <span class="menu-left__icon">NA</span>
                            Notifications & Alerts
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-loading-progress.html">
                            <span class="menu-left__icon">LP</span>
                            Loading Progress
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-progress-bars.html">
                            <span class="menu-left__icon">PB</span>
                            Progress Bars
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-badges-labels.html">
                            <span class="menu-left__icon">BL</span>
                            Badges & Labels
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-steps.html">
                            <span class="menu-left__icon">S</span>
                            Steps
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-breadcrumbs.html">
                            <span class="menu-left__icon">B</span>
                            Breadcrumbs
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-pagination.html">
                            <span class="menu-left__icon">P</span>
                            Pagination
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-collapse.html">
                            <span class="menu-left__icon">C</span>
                            Collapse
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-tabs.html">
                            <span class="menu-left__icon">T</span>
                            Tabs
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-text-editor.html">
                            <span class="menu-left__icon">TE</span>
                            Text Editor
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="components-nestable.html">
                            <span class="menu-left__icon">N</span>
                            Nestable
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-table"></span>
                    Tables
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="tables-basic-tables.html">
                            <span class="menu-left__icon">BT</span>
                            Basic Tables
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="tables-datatables.html">
                            <span class="menu-left__icon">DT</span>
                            DataTables
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="tables-editable-tables.html">
                            <span class="menu-left__icon">ET</span>
                            Editable Tables
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-stats-bars"></span>
                    Charts
                </a>
                <ul class="menu-left__list">
                    <li  class="menu-left__item">
                        <a href="charts-chartistjs.html">
                            <span class="menu-left__icon">CT</span>
                            Chartist.js
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="charts-chartjs.html">
                            <span class="menu-left__icon">CR</span>
                            Chart.js
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="charts-c3.html">
                            <span class="menu-left__icon">C3</span>
                            C3
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="charts-peity.html">
                            <span class="menu-left__icon">PT</span>
                            Peity
                        </a>
                    </li>
                </ul>
            </li>
            <li  class="menu-left__item">
                <a href="components-mail-templates.html">
                    <span class="menu-left__icon icmn-envelop"></span>
                    Mail Templates
                </a>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li  class="menu-left__item">
                <a href="apps-profile.html">
                    <span class="menu-left__icon icmn-profile"></span>
                    Profile
                </a>
            </li>
            <li  class="menu-left__item">
                <a href="apps-messaging.html">
                    <span class="menu-left__icon icmn-bubbles4"></span>
                    <span class="badge badge-danger pull-right">768</span>
                    Messaging
                </a>
            </li>
            <li  class="menu-left__item">
                <a href="apps-mail.html">
                    <span class="menu-left__icon icmn-envelop"></span>
                    <span class="badge badge-success pull-right">84</span>
                    Mail
                </a>
            </li>
            <li  class="menu-left__item">
                <a href="apps-calendar.html">
                    <span class="menu-left__icon icmn-calendar"></span>
                    Calendar
                </a>
            </li>
            <li  class="menu-left__item">
                <a href="apps-gallery.html">
                    <span class="menu-left__icon icmn-images"></span>
                    Gallery
                </a>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-checkbox-unchecked"></span>
                    Layout
                </a>
                <ul class="menu-left__list">
                    <li  class="menu-left__item">
                        <a href="layout-grid.html">
                            <span class="menu-left__icon">G</span>
                            Grid
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="layout-cards.html">
                            <span class="menu-left__icon">PC</span>
                            Cards / Panels
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="layout-sidebars.html">
                            <span class="menu-left__icon">SB</span>
                            Sidebars
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="layout-utilities.html">
                            <span class="menu-left__icon">U</span>
                            Utilities
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-star-full"></span>
                    Icons
                </a>
                <ul class="menu-left__list">
                    <li  class="menu-left__item">
                        <a href="icons-fontawesome.html">
                            <span class="menu-left__icon">FA</span>
                            FontAwesome
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="icons-linear-icons-free.html">
                            <span class="menu-left__icon">LI</span>
                            Linearicons Free
                        </a>
                    </li>
                    <li  class="menu-left__item">
                        <a href="icons-icomoon-free.html">
                            <span class="menu-left__icon">IC</span>
                            Icomoon Free
                        </a>
                    </li>
                </ul>
            </li>
            <li  class="menu-left__item">
                <a href="layout-typography.html">
                    <span class="menu-left__icon icmn-font-size"></span>
                    Typography
                </a>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li  class="menu-left__item menu-left__item--disabled">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon">D</span>
                    Disabled Item
                </a>
            </li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon">IN</span>
                    Infinity Nested
                </a>
                <!-- level 1 -->
                <ul class="menu-left__list">
                    <li class="menu-left__item menu-left__submenu">
                        <a href="javascript: void(0);">
                            Level 1
                        </a>
                        <!-- level 2 -->
                        <ul class="menu-left__list">
                            <li class="menu-left__item menu-left__submenu">
                                <a href="javascript: void(0);">
                                    Level 1.2
                                </a>
                                <!-- level 3 -->
                                <ul class="menu-left__list">
                                    <li  class="menu-left__item">
                                        <a href="javascript: void(0);">
                                            Level 1.2.3
                                        </a>
                                    </li>
                                    <li class="menu-left__item menu-left__submenu">
                                        <a href="javascript: void(0);">
                                            Level 1.2.3
                                        </a>
                                        <!-- level 4 -->
                                        <ul class="menu-left__list">
                                            <li  class="menu-left__item">
                                                <a href="javascript: void(0);">
                                                    Level 1.2.3.4
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>
                            <li  class="menu-left__item">
                                <a href="javascript: void(0);">
                                    Level 1.2
                                </a>
                            </li>
                            <li  class="menu-left__item">
                                <a href="javascript: void(0);">
                                    Level 1.2
                                </a>
                            </li>
                            <li  class="menu-left__item">
                                <a href="javascript: void(0);">
                                    Level 1.2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li  class="menu-left__item">
                        <a href="javascript: void(0);">
                            Level 1
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item">
                <a href="javascript: void(0);">
                    <span class="utils__donut utils__donut--success"></span>
                    Jupiter
                </a>
            </li>
            <li class="menu-left__item">
                <a href="javascript: void(0);">
                    <span class="utils__donut utils__donut--primary"></span>
                    Earth
                </a>
            </li>
            <li class="menu-left__item">
                <a href="javascript: void(0);">
                    <span class="utils__donut utils__donut--danger"></span>
                    Mercury
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="top-bar">
  <!-- left aligned items -->
  <div class="top-bar__left">
    <div class="top-bar__logo">
      <a href="dashboards-alpha.html">
        <img src="{{ asset('components/dummy-assets/common/img/logo.png') }}" alt="" />
      </a>
    </div>
    <div class="top-bar__item d-none d-md-block">
      <div class="dropdown">
        <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-folder-open mr-2"></i>
          <span class="d-none d-xl-inline-block"><strong>Issues History</strong></span>
        </a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" href="javascript:void(0)">Current search</a>
          <a class="dropdown-item" href="javascript:void(0)">Search for issues</a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Opened</div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-253
            Project implemen...</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i> CLNUI-234
            Active history iss...</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-clock"></i> CLNUI-424 Ionicons
            intergrat...</a>
          <a class="dropdown-item" href="javascript:void(0)">More...</a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Filters</div>
          <a class="dropdown-item" href="javascript:void(0)">My open issues</a>
          <a class="dropdown-item" href="javascript:void(0)">Reported by me</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">Import issues from CSV</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i> Settings</a>
        </div>
      </div>
    </div>
    <div class="top-bar__item d-none d-md-block">
      <div class="dropdown">
        <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-database mr-2"></i>
          <span class="d-none d-xl-inline-block"><strong>Project Management</strong></span>
        </a>
        <div class="dropdown-menu" role="menu">
          <div class="dropdown-header">Active</div>
          <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
          <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
          <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
          <div class="dropdown-header">Inactive</div>
          <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i> Settings</a>
        </div>
      </div>
    </div>
    <div class="top-bar__item d-none d-xl-inline-block">
      <div class="top-bar__search">
        <i class="icmn-search"><!-- --></i>
        <input type="text" placeholder="Type to search..."/>
      </div>
    </div>
  </div>
  <!-- right aligned items -->
  <div class="top-bar__right">
    <div class="top-bar__item d-none d-md-block">
      <a
        href="https://themeforest.net/item/clean-ui-admin-template-modular-trendy-design-modules-market-bem-angular-2-visual-builder/19597589?s_rank=4&ref=mediatec_software"
        target="_blank"
        class="btn btn-sm btn-outline-danger">Buy Now 24$</a>
    </div>
    <div class="top-bar__item top-bar__item--hiddenOn1300">
      <div class="top-bar__mini-chart text-nowrap">
        Server Load:
        <div class="top-bar__mini-chart__inner">
          <i style="height: 30%;"></i>
          <i style="height: 78%;"></i>
          <i style="height: 10%;"></i>
          <i style="height: 46%;"></i>
          <i style="height: 26%;"></i>
          <i style="height: 29%;"></i>
          <i style="height: 50%;"></i>
          <i style="height: 89%;"></i>
          <i style="height: 30%;"></i>
        </div>
        20%
      </div>
    </div>
    <div class="top-bar__item d-none d-md-block">
      <div class="dropdown">
        <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false">
          <i class="menu-notification-icon icmn-home"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">

          <div class="top-bar__activity">
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-star-full"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">now</span>
                  <a href="javascript: void(0);">Update Status: <span class="badge badge-danger">New</span></a>
                </div>
                <div class="top-bar__activity__descr">
                  Failed to get available update data. To ensure the proper functioning of your application, update now.
                </div>
              </div>
            </div>
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-stack"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">24 min ago</span>
                  <a href="javascript: void(0);">Income: <span class="badge badge-default">$299.00</span></a>
                </div>
                <div class="top-bar__activity__descr">
                  Failed to get available update data. To ensure the proper functioning of your application, update now.
                </div>
              </div>
            </div>
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-list"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">30 min ago</span>
                  <a href="javascript: void(0);">Inbox Message</a>
                </div>
                <div class="top-bar__activity__descr">
                  From: <a href="javascript: void(0);">David Bowie</a>
                </div>
              </div>
            </div>
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-home"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">now</span>
                  <a href="javascript: void(0);">Update Status: <span class="badge badge-primary">New</span></a>
                </div>
                <div class="top-bar__activity__descr">
                  Failed to get available update data. To ensure the proper functioning of your application, update now.
                </div>
              </div>
            </div>
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-loop"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">24 min ago</span>
                  <a href="javascript: void(0);">Income: <span class="badge badge-warning">$299.00</span></a>
                </div>
                <div class="top-bar__activity__descr">
                  Failed to get available update data. To ensure the proper functioning of your application, update now.
                </div>
              </div>
            </div>
            <div class="top-bar__activity__item">
              <i class="top-bar__activity__icon icmn-cog utils__spin-delayed--pseudo-selector"></i>
              <div class="top-bar__activity__inner">
                <div class="top-bar__activity__title">
                  <span class="pull-right">30 min ago</span>
                  <a href="javascript: void(0);">Inbox Message</a>
                </div>
                <div class="top-bar__activity__descr">
                  From: <a href="javascript: void(0);">David Bowie</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="top-bar__item">
      <div class="dropdown top-bar__avatar-dropdown">
        <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="top-bar__avatar">
                <img src="{{ asset('components/dummy-assets/common/img/avatars/1.jpg') }}" alt="" />
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-user"></i> Profile</a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Home</div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> System
            Dashboard</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> User Boards</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> Issue
            Navigator (35 New)</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-exit"></i> Logout</a>
        </div>
      </div>
    </div>
    <div class="top-bar__item">
      <div class="top-bar__menu-button menu-right__action--menu-toggle">
        <i class="fa fa-bars"><!-- --></i>
      </div>
    </div>
  </div>
</div>
<div class="utils__content">
<!-- START: dashboard beta -->
<nav class="utils__top-sidebar utils__top-sidebar--bg">
    <div class="pull-right">
        <a href="javascript: void(0);" class="btn btn-sm btn-outline-default ladda-button">
            Update
            <span class="hidden-sm-down"> Dashboard</span>
        </a>
        <a href="javascript: void(0);" class="btn btn-sm btn-outline-default ladda-button reset-button">
            Reset
            <span class="hidden-sm-down"> Order</span>
        </a>
    </div>
    <span class="font-size-18 d-block mb-2">
        <span class="text-muted">Home ·</span>
        <strong>Dashboard Beta</strong>
        <small class="text-muted">statistics, charts, recent events and reports</small>
    </span>
</nav>
<div class="row">
    <div class="col-lg-6">
        <div class="utils__sortable" id="left-col">
            <div class="card" data-order-id="card-1">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Account Information</strong></div>
                    <div class="utils__titleDescription">All cards are draggable and sortable!</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ProfileHeadCard">
                                <div class="ProfileHeadCard__head"
                                     style="background-image: url('{{ asset('components/dummy-assets/common/img/photos/5.jpeg' ) }}');">
                                    <h2 class="text-white">
                                        <strong>
                                            Clean. Simple <br/>
                                            Responsive
                                        </strong>
                                    </h2>
                                </div>
                                <div class="ProfileHeadCard__content">
                                    <div class="ProfileHeadCard__left">
                                        <a class="d-block mx-auto mb-2 avatar avatar--90 avatar--bordered avatar--borderWhite"
                                           href="javascript: void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/5.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                        <strong>Helen Maggie</strong>
                                        <br/>
                                        <span class="text-muted">@helen_m</span>
                                    </div>
                                    <div class="ProfileHeadCard__right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-order-id="card-2">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Work progress</strong></div>
                    <div class="utils__titleDescription">Block with important Work Progress information</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <strong>Work Progress:</strong>
                            <p class="text-muted">Ipsum is simply dummy</p>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                            </div>
                            <strong>Airplanes:</strong>
                            <p class="text-muted">Typesetting industry</p>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                            </div>
                            <strong>Robots:</strong>
                            <p class="text-muted">Typesetting industry</p>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                            </div>
                            <strong>Automotive:</strong>
                            <p class="text-muted">Typesetting industry</p>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                            </div>
                            <strong>Total Time:</strong>
                            <p class="text-muted">Printing and typesetting</p>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                     role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 18%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-order-id="card-3">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Employees</strong></div>
                    <div class="utils__titleDescription">Can you drag me now?</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="userCard px-3 py-5">
                                <button class="userCard__plusBtn">Add</button>
                                <a class="d-block mx-auto mb-2 avatar avatar--90 avatar--bordered"
                                   href="javascript: void(0);">
                                    <img src="{{ asset('components/dummy-assets/common/img/avatars/5.jpg') }}"
                                         alt="Alternative text to the image"/>
                                </a>
                                <div class="my-3 text-center">
                                    <div class="userCard__userName font-size-18">Lee Aniston</div>
                                    <div class="userCard__post">Project Manager</div>
                                </div>
                                <div class="text-center">
                                    <div class="btn-group text-center">
                                        <button type="button" class="btn btn-sm btn-rounded">Add</button>
                                        <button type="button" class="btn btn-sm btn-rounded">Inbox</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="userCard px-3 py-5">
                                <button class="userCard__plusBtn">Add</button>
                                <a class="d-block mx-auto mb-2 avatar avatar--90 avatar--bordered"
                                   href="javascript: void(0);">
                                    <img src="{{ asset('components/dummy-assets/common/img/avatars/3.jpg') }}"
                                         alt="Alternative text to the image"/>
                                </a>
                                <div class="my-3 text-center">
                                    <div class="userCard__userName font-size-18">Amanda Smith</div>
                                    <div class="userCard__post">Project Manager</div>
                                </div>
                                <div class="text-center">
                                    <div class="btn-group text-center">
                                        <button type="button" class="btn btn-sm btn-rounded">Add</button>
                                        <button type="button" class="btn btn-sm btn-rounded">Inbox</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="userCard px-3 py-5 userCard--whiteFont bg-primary">
                                <button class="userCard__plusBtn">Add</button>
                                <a class="d-block mx-auto mb-2 avatar avatar--90 avatar--bordered"
                                   href="javascript: void(0);">
                                    <img src="{{ asset('components/dummy-assets/common/img/avatars/2.jpg') }}"
                                         alt="Alternative text to the image"/>
                                </a>
                                <div class="my-3 text-center">
                                    <div class="userCard__userName font-size-18">Anna Gray</div>
                                    <div class="userCard__post">CEO</div>
                                </div>
                                <div class="text-center">
                                    <div class="btn-group text-center">
                                        <button type="button" class="btn btn-sm btn-rounded">Add</button>
                                        <button type="button" class="btn btn-sm btn-rounded">Inbox</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="utils__margin-fix"><!-- --></div>
                </div>
            </div>
            <div class="card" data-order-id="card-4">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Task Table</strong></div>
                    <div class="utils__titleDescription">Block with important Task Table information</div>
                </div>
                <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">First Name</th>
                            <th class="border-top-0">Username</th>
                            <th class="border-top-0 hidden-lg-down">Levels</th>
                            <th class="border-top-0"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td><a href="javascript: void(0);" class="utils__link--underlined utils__link--blue"
                                   data-toggle="tooltip"
                                   data-placement="right" title="" data-original-title="User #1">Mark Stevenson</a></td>
                            <td>@mdo</td>
                            <td class="hidden-lg-down">
                                <div class="utils__steps-inline d-block">
                                    <a href="javascript: void(0);" class="utils__step utils__step--success">1</a>
                                    <a href="javascript: void(0);" class="utils__step utils__step--success">2</a>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown pull-right">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="javascript: void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td><a href="javascript: void(0);" class="utils__link--underlined utils__link--blue"
                                   data-toggle="tooltip"
                                   data-placement="right" title="" data-original-title="User #2">Jacob Hoffman</a></td>
                            <td>@fat</td>
                            <td class="hidden-lg-down">
                                <div class="utils__steps-inline d-block">
                                    <a href="javascript: void(0);" class="utils__step utils__step--success">1</a>
                                    <a href="javascript: void(0);" class="utils__step">2</a>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown pull-right">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="javascript: void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td><a href="javascript: void(0);" class="utils__link--underlined utils__link--blue"
                                   data-toggle="tooltip"
                                   data-placement="right" title="" data-original-title="User #3">Larry Page</a></td>
                            <td>@twitter</td>
                            <td class="hidden-lg-down">
                                <div class="utils__steps-inline d-block">
                                    <a href="javascript: void(0);" class="utils__step utils__step--primary">1</a>
                                    <a href="javascript: void(0);" class="utils__step">2</a>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown pull-right">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="javascript: void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td><a href="javascript: void(0);" class="utils__link--underlined utils__link--blue"
                                   data-toggle="tooltip"
                                   data-placement="right" title="" data-original-title="User #1">Mark Stevenson</a></td>
                            <td>@mdo</td>
                            <td class="hidden-lg-down">
                                <div class="utils__steps-inline d-block">
                                    <a href="javascript: void(0);" class="utils__step utils__step--success">1</a>
                                    <a href="javascript: void(0);" class="utils__step utils__step--success">2</a>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown pull-right">
                                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="javascript: void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card" data-order-id="card-5">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Recent Works</strong></div>
                    <div class="utils__titleDescription">Block with important Recent Works information</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="infoCard infoCard--interactive infoCard--aroundBorder">
                                <div class="infoCard__icon text-center font-size-30">
                                    <i class="icmn-database"></i>
                                </div>
                                <div class="mt-2 text-center">
                                    <div class="mb-2">
                                        <p>Lorem Ipsum is simply dummy text of printing the printing and typesetti...</p>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-outline-primary">
                                        Information
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="infoCard infoCard--interactive infoCard--whiteFont infoCard--aroundBorder bg-success">
                                <div class="infoCard__icon text-center font-size-30">
                                    <i class="icmn-home"></i>
                                </div>
                                <div class="mt-2 text-center">
                                    <div class="mb-2">
                                        <p>Lorem Ipsum is simply dummy text of printing the printing and typesetti...</p>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-outline-success">
                                        Information
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="infoCard infoCard--interactive infoCard--whiteFont infoCard--aroundBorder bg-danger">
                                <div class="infoCard__icon text-center font-size-30">
                                    <i class="icmn-users"></i>
                                </div>
                                <div class="mt-2 text-center">
                                    <div class="mb-2">
                                        <p>Lorem Ipsum is simply dummy text of printing the printing and typesetti...</p>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-outline-danger">
                                        Information
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="utils__margin-fix"><!-- --></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="utils__sortable" id="right-col">
            <div class="card" data-order-id="card-6">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Server Info</strong></div>
                    <div class="utils__titleDescription">Block with important Server info information</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sliderCard bg-default">
                                <div class="carousel slide" id="carousel-1" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-1" data-slide-to="1" class=""></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <a href="javascript: void(0);" class="sliderCard__body text-white">
                                                <div class="sliderCard__icon">
                                                    <i class="icmn-accessibility"></i>
                                                </div>
                                                <h2>Sales Growth</h2>
                                                <p>View Report</p>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="javascript: void(0);" class="sliderCard__body text-white">
                                                <div class="sliderCard__icon">
                                                    <i class="icmn-download"></i>
                                                </div>
                                                <h2>All Reports</h2>
                                                <p>Pdf Download</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sliderCard bg-default">
                                <div class="carousel slide" id="carousel-2" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-2" data-slide-to="1" class=""></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <a href="javascript: void(0);" class="sliderCard__body text-white">
                                                <div class="sliderCard__icon">
                                                    <i class="icmn-books"></i>
                                                </div>
                                                <h2>
                                                    <i class="icmn-books"></i> Todo
                                                </h2>
                                                <p>
                                                    1. Upgrade
                                                    <br/>
                                                    2. Finish
                                                </p>
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="javascript: void(0);" class="sliderCard__body text-white">
                                                <div class="sliderCard__icon">
                                                    <i class="icmn-download"></i>
                                                </div>
                                                <h2>
                                                    <i class="icmn-download"></i> Finish
                                                </h2>
                                                <p>
                                                    1. Upgrade
                                                    <br/>
                                                    2. Prepare
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="utils__margin-fix"><!-- --></div>
                </div>
            </div>
            <div class="card" data-order-id="card-7">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Server Statistics</strong></div>
                    <div class="utils__titleDescription">Block with important Server Statistics information</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="infoCard infoCard--whiteFont bg-success">
                                <span class="infoCard__digit">
                                    <i class="icmn-database"></i>
                                </span>
                                <div class="infoCard__desc">
                                    <span class="infoCard__title">Databases</span>
                                    <p>Total: 78181</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="infoCard infoCard--whiteFont bg-primary">
                                <span class="infoCard__digit">
                                    <i class="icmn-bullhorn"></i>
                                </span>
                                <div class="infoCard__desc">
                                    <span class="infoCard__title">Databases</span>
                                    <p>Total: 23573</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="infoCard infoCard--whiteFont bg-default">
                                <span class="infoCard__digit">
                                    <i class="icmn-users"></i>
                                </span>
                                <div class="infoCard__desc">
                                    <span class="infoCard__title">Databases</span>
                                    <p>Total: 34508</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="infoCard infoCard--whiteFont bg-danger">
                                <span class="infoCard__digit">
                                    <i class="icmn-home"></i>
                                </span>
                                <div class="infoCard__desc">
                                    <span class="infoCard__title">Databases</span>
                                    <p>Total: 2352</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="utils__margin-fix"><!-- --></div>
                </div>
            </div>
            <div class="card" data-order-id="card-8">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Server Configuration</strong></div>
                    <div class="utils__titleDescription">Block with important Server Configuration information</div>
                </div>
                <div class="card-body">
                    <div class="my-3">
                        <div class="mb-3">
                            <input type="text" id="slider-1" class="form-control" name="example_name" value=""/>
                        </div>
                        <div>
                            <input type="text" id="slider-2" class="form-control" name="example_name" value=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card utils__sortable__collapsed" id="duck-game" data-order-id="card-9">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Collapsed Card</strong></div>
                    <div class="utils__titleDescription">Uncollapse me by icon or double click</div>
                </div>
                <div class="card-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="card" data-order-id="card-10">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Week Revenue Statistics, Billions</strong></div>
                    <span class="mr-2 nowrap">
                        <span class="utils__donut utils__donut--success"></span>
                        Nuts
                    </span>
                    <span class="mr-2 nowrap">
                        <span class="utils__donut utils__donut--primary"></span>
                        Apples
                    </span>
                    <span class="mr-2 nowrap">
                        <span class="utils__donut utils__donut--danger"></span>
                        Peaches
                    </span>
                </div>
                <div class="card-body">
                    <div class="chart-line height-300 chartist"></div>
                </div>
            </div>
            <div class="card" data-order-id="card-11">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Month Site Visits Growth, %</strong></div>
                    <span class="mr-2 nowrap">
                        <span class="utils__donut utils__donut--primary"></span>
                        Income
                    </span>
                    <span class="mr-2 nowrap">
                        <span class="utils__donut utils__donut--success"></span>
                        Outcome
                    </span>
                </div>
                <div class="card-body">
                    <div class="chart-overlapping-bar height-300 chartist"></div>
                </div>
            </div>
            <div class="card" data-order-id="card-12">
                <div class="card-header">
                    <div class="pull-right utils__sortable__control">
                        <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Collapse"></i>
                        <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                           data-placement="left" title=""
                           data-original-title="Uncollapse"></i>
                        <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                           title=""
                           data-original-title="Remove"></i>
                    </div>
                    <div class="utils__title"><strong>Chat</strong></div>
                    <div class="utils__titleDescription">Block with important Chat information</div>
                </div>
                <div class="card-body">
                    <div class="apps__messaging">
                        <div class="height-400 custom-scroll utils__scrollable">
                            <div class="apps__chat-block">
                                <div class="apps__chat-block__item clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/3.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>David Scott</strong>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <div class="apps__chat-block__item clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/3.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>Chris Smith</strong>
                                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                                        <img class="apps__profile__wall__message-img"
                                             src="{{ asset('components/dummy-assets/common/img/photos/4.jpeg') }}" alt="" />
                                        <img class="apps__profile__wall__message-img"
                                             src="{{ asset('components/dummy-assets/common/img/photos/3.jpeg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="apps__chat-block__item apps__chat-block__item--right clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/4.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>Donald Trump</strong>
                                        <p>Ok. Thanks!</p>
                                    </div>
                                </div>
                                <div class="apps__chat-block__item apps__chat-block__item--right clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/4.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>Donald Trump</strong>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum is simply
                                            dummy</p>
                                    </div>
                                </div>
                                <div class="apps__chat-block__item clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/3.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>David Scott</strong>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <div class="apps__chat-block__item apps__chat-block__item--right clearfix">
                                    <div class="apps__chat-block__avatar">
                                        <a class="utils__avatar" href="javascript:void(0);">
                                            <img src="{{ asset('components/dummy-assets/common/img/avatars/4.jpg') }}"
                                                 alt="Alternative text to the image"/>
                                        </a>
                                    </div>
                                    <div class="apps__chat-block__content">
                                        <strong>Donald Trump</strong>
                                        <p>Ok. Thanks!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <textarea class="form-control adjustable-textarea"
                                      placeholder="Type and press enter"></textarea>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-primary width-100">
                                    <i class="fa fa-send mr-2"></i>
                                    Send
                                </button>
                                <button class="btn btn-link">
                                    Attach File
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="utils__sortable" id="bottom-col">
            <div class="card" data-order-id="card-13">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- Example State Done -->
                            <div class="utils__step utils__step--squared utils__step--success">
                                        <span class="utils__step__digit">
                                            <i class="icmn-home"><!-- --></i>
                                        </span>
                                <div class="utils__step__desc">
                                    <span class="utils__step__title">Block Title</span>
                                    <p>Waiting for review</p>
                                </div>
                            </div>
                            <!-- End Example State Done -->
                        </div>
                        <div class="col-lg-3">
                            <!-- Example State Error -->
                            <div class="utils__step utils__step--squared utils__step--primary">
                                        <span class="utils__step__digit">
                                            <i class="icmn-key"><!-- --></i>
                                        </span>
                                <div class="utils__step__desc">
                                    <span class="utils__step__title">Block Title</span>
                                    <p>Waiting for review</p>
                                </div>
                            </div>
                            <!-- End Example State Error -->
                        </div>
                        <div class="col-lg-3">
                            <!-- Example State Current -->
                            <div class="utils__step utils__step--squared utils__step--warning">
                                        <span class="utils__step__digit">
                                            <i class="icmn-play2"><!-- --></i>
                                        </span>
                                <div class="utils__step__desc">
                                    <span class="utils__step__title">Block Title</span>
                                    <p>Waiting for review</p>
                                </div>
                            </div>
                            <!-- End Example State Current -->
                        </div>
                        <div class="col-lg-3">
                            <!-- Example State Disabled -->
                            <div class="utils__step utils__step--disabled">
                                        <span class="utils__step__digit">
                                            <i class="icmn-database"><!-- --></i>
                                        </span>
                                <div class="utils__step__desc">
                                    <span class="utils__step__title">Block Title</span>
                                    <p>Waiting for review</p>
                                </div>
                            </div>
                            <!-- End Example State Disabled -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover nowrap" id="example1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Damon</td>
                            <td>5516 Adolfo Green</td>
                            <td>Littelhaven</td>
                            <td>85</td>
                            <td>2014/06/13</td>
                            <td>$553,536</td>
                        </tr>
                        <tr>
                            <td>Torrey</td>
                            <td>1995 Richie Neck</td>
                            <td>West Sedrickstad</td>
                            <td>77</td>
                            <td>2014/09/12</td>
                            <td>$243,577</td>
                        </tr>
                        <tr>
                            <td>Miracle</td>
                            <td>176 Hirthe Squares</td>
                            <td>Ryleetown</td>
                            <td>82</td>
                            <td>2013/09/27</td>
                            <td>$784,802</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card" data-order-id="card-14">
            <div class="card-header">
                <div class="pull-right utils__sortable__control">
                    <i class="icmn-minus mr-2 utils__sortable__collapse" data-toggle="tooltip" data-placement="left"
                       title=""
                       data-original-title="Collapse"></i>
                    <i class="icmn-plus mr-2 utils__sortable__uncollapse" data-toggle="tooltip"
                       data-placement="left" title=""
                       data-original-title="Uncollapse"></i>
                    <i class="icmn-cross utils__sortable__close" data-toggle="tooltip" data-placement="left"
                       title=""
                       data-original-title="Remove"></i>
                </div>
                <div class="utils__title"><strong>Calendar</strong></div>
                <div class="utils__titleDescription">Block with important Calendar information</div>
            </div>
            <div class="card-body">
                <div class="example-calendar-block"></div>
            </div>
        </div>
    </div>
</div>
<!-- END: dashboard alpha -->

<!-- START: page scripts -->
<script>
  (function($) {
    "use strict";
    $(function () {

      ///////////////////////////////////////////////////////////
      // tooltips
      $('[data-toggle=tooltip]').tooltip()

      ///////////////////////////////////////////////////////////
      // jquery ui sortable
      $('#left-col, #right-col, #bottom-col').each(function () {
        $(this).sortable({
          // connect left and right containers
          connectWith: '.utils__sortable',
          tolerance: 'pointer',
          scroll: true,

          // set initial order from localStorage
          create: function () {

            var that = $(this),
              id = $(this).attr('id'),
              orderLs = localStorage.getItem('order-' + id)

            if (orderLs) {
              var order = orderLs.split(',')

              $.each(order, function (key, val) {
                var el = $('[data-order-id=' + val + ']')
                that.append(el)
              })
            }

          },

          // save order state on order update to localStorage
          update: function () {
            var orderArray = $(this).sortable('toArray', {attribute: 'data-order-id'}),
              prefix = $(this).attr('id')

            localStorage.setItem('order-' + prefix, orderArray)
          },

          // handler
          handle: '.card-header'
        })
      })

      ///////////////////////////////////////////////////////////
      // reset dashboard
      $('.reset-button').on('click', function () {
        localStorage.removeItem('order-left-col')
        localStorage.removeItem('order-right-col')
        localStorage.removeItem('order-bottom-col')
        setTimeout(function () {
          location.reload()
        }, 500)
      })

      ///////////////////////////////////////////////////////////
      // card controls
      $('.utils__sortable__collapse, .utils__sortable__uncollapse').on('click', function () {
        $(this).closest('.card').toggleClass('utils__sortable__collapsed')
      })
      $('.utils__sortable__close').on('click', function () {
        $(this).closest('.card').remove()
        $('.tooltip').remove()
      })

      // header double click
      $('.utils__sortable .card-header').on('dblclick', function () {
        $(this).closest('.card').toggleClass('utils__sortable__collapsed')
      })

      ///////////////////////////////////////////////////////////
      // datatables
      $('#example1').DataTable({
        responsive: true
      })

      ///////////////////////////////////////////////////////////
      // calendar
      $('.example-calendar-block').fullCalendar({
        //aspectRatio: 2,
        height: 475,
        header: {
          left: 'prev, next',
          center: 'title',
          right: 'month, agendaWeek, agendaDay'
        },
        buttonIcons: {
          prev: 'none fa fa-arrow-left',
          next: 'none fa fa-arrow-right',
          prevYear: 'none fa fa-arrow-left',
          nextYear: 'none fa fa-arrow-right'
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        viewRender: function (view, element) {
          if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.fc-scroller').jScrollPane({
              autoReinitialise: true,
              autoReinitialiseDelay: 100
            })
          }
        },
        defaultDate: '2017-05-12',
        events: [
          {
            title: 'All Day Event',
            start: '2017-05-01',
            class: 'fc-event-success'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-09T16:00:00',
            class: 'fc-event-default'
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-16T16:00:00',
            class: 'fc-event-success'
          },
          {
            title: 'Conference',
            start: '2017-05-11',
            end: '2017-05-14',
            class: 'fc-event-danger'
          }
        ],
        eventClick: function (calEvent, jsEvent, view) {
          if (!$(this).hasClass('event-clicked')) {
            $('.fc-event').removeClass('event-clicked')
            $(this).addClass('event-clicked')
          }
        }
      })

      ///////////////////////////////////////////////////////////
      // ladda buttons
      Ladda.bind('.ladda-button', {timeout: 2000})

      ///////////////////////////////////////////////////////////
      // chart1
      new Chartist.Line('.chart-line', {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        series: [
          [5, 0, 7, 8, 12],
          [2, 1, 3.5, 7, 3],
          [1, 3, 4, 5, 6]
        ]
      }, {
        fullWidth: !0,
        chartPadding: {
          right: 40
        },
        plugins: [
          Chartist.plugins.tooltip()
        ]
      })

      ///////////////////////////////////////////////////////////
      // chart 2
      var overlappingData = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          series: [
            [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
            [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
          ]
        },
        overlappingOptions = {
          seriesBarDistance: 10,
          plugins: [
            Chartist.plugins.tooltip()
          ]
        },
        overlappingResponsiveOptions = [
          ['', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0]
              }
            }
          }]
        ]

      new Chartist.Bar('.chart-overlapping-bar', overlappingData, overlappingOptions, overlappingResponsiveOptions)

      ///////////////////////////////////////////////////////////
      // custom scroll
      if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
        $('.custom-scroll').each(function () {
          $(this).jScrollPane({
            contentWidth: '100%',
            autoReinitialise: true,
            autoReinitialiseDelay: 100
          })
          var api = $(this).data('jsp'),
            throttleTimeout
          $(window).on('resize', function () {
            if (!throttleTimeout) {
              throttleTimeout = setTimeout(function () {
                api.reinitialise()
                throttleTimeout = null
              }, 50)
            }
          })
        })
      }

      ///////////////////////////////////////////////////////////
      // adjustable textarea
      autosize($('.adjustable-textarea'))

      ///////////////////////////////////////////////////////////
      // slider
      $('#slider-1').ionRangeSlider({
        min: 0,
        max: 16000,
        from: 12000,
        step: 1000,
        grid: true,
        grid_num: 8
      })

      $('#slider-2').ionRangeSlider({
        type: 'double',
        min: 0,
        max: 100,
        from: 20,
        from_min: 10,
        from_max: 30,
        from_shadow: true,
        to: 60,
        to_min: 50,
        to_max: 70,
        to_shadow: true,
        grid: true,
        grid_num: 10
      })

    })
  })(jQuery)
</script>
<!-- END: page scripts -->
<div class="footer">
  <div class="footer__top">
    <div class="row">
      <div class="col-lg-9 mb-3">
        <div class="mb-3">
          <strong>Clean UI HTML - HTML Bootstrap Admin Template - Best Solution for Your App!</strong>
        </div>
        <div class="footer__description">
          <p>Clean UI HTML – a modern professional admin template, based on Bootstrap 4
            framework. Clean UI HTML is a powerful and super flexible tool, which suits best for any
            kind of web application: Web Applications; CRM; CMS; Admin Panels; Dashboards; etc.
            Clean UI HTML is fully responsive, which means that it looks perfect on mobiles and
            tablets</p>

          <p>Clean UI HTML is fully based on SASS pre-processor, includes 50+ commented SASS files.
            Each file corresponds to a single component, layout, page, plugin or extension –
            so you can easily find necessary piece of code and edit it for your needs.
            The package includes both normal and minified CSS files, compiled from SASS</p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-8">
        <div class="footer__company">
          <img class="footer__company-logo" src="{{ asset('components/dummy-assets/common/img/mediatec.png') }}"
               title="Mediatec Software">
          <span>
            © 2018 <a href="#" target="_blank">Clorida Technologies</a>
            <br>
            All rights reserved
          </span>
        </div>
      </div>
    </div>
  </div>
  <a href="javascript: void(0);" class="utils__scroll-top" onclick="$('body, html').animate({'scrollTop': 0}, 500)"><i
    class="icmn-arrow-up"></i></a>
</div>
</div>
</body>
</html>