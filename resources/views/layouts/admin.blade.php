<!DOCTYPE html>
<html lang="en" data-kit-theme="default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/admin/components/kit/core/img/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Mukta:400,700,800&amp;display=swap" rel="stylesheet">

    <!-- VENDORS -->
    <link rel="stylesheet" type="text/css" href="/admin/vendors/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="/admin/vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/datatables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/chartist/dist/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/jquery-steps/demo/css/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/font-feathericons/dist/feather.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/font-linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/vendors/font-awesome/css/font-awesome.min.css">


    {{--// Custom CS--}}
    <link rel="stylesheet" type="text/css" href="/admin/css/style.css">

    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/admin/vendors/popper.js/dist/umd/popper.js"></script>
    <script src="/admin/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/admin/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="/admin/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="/admin/vendors/spin.js/spin.js"></script>
    <script src="/admin/vendors/ladda/dist/ladda.min.js"></script>
    <script src="/admin/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/admin/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="/admin/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="/admin/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="/admin/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="/admin/vendors/autosize/dist/autosize.min.js"></script>
    <script src="/admin/vendors/bootstrap-show-password/dist/bootstrap-show-password.min.js"></script>
    <script src="/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/admin/vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/admin/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="/admin/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="/admin/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="/admin/vendors/summernote/dist/summernote.min.js"></script>
    <script src="/admin/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/admin/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="/admin/vendors/nestable/jquery.nestable.js"></script>
    <script type="text/javascript"
            src="/admin/vendors/datatables/datatables.min.js"></script>
    <script src="/admin/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="/admin/vendors/d3/d3.min.js"></script>
    <script src="/admin/vendors/c3/c3.min.js"></script>
    <script src="/admin/vendors/chartist/dist/chartist.min.js"></script>
    <script src="/admin/vendors/peity/jquery.peity.min.js"></script>
    <script src="/admin/vendors/chartist-plugin-tooltips-updated/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/admin/vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="/admin/vendors/nprogress/nprogress.js"></script>
    <script src="/admin/vendors/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="/admin/vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="/admin/vendors/d3-dsv/dist/d3-dsv.js"></script>
    <script src="/admin/vendors/d3-time-format/dist/d3-time-format.js"></script>
    <script src="/admin/vendors/techan/dist/techan.min.js"></script>
    <script src="/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/admin/vendors/jqvmap/dist/maps/jquery.vmap.usa.js" charset="utf-8"></script>

    <!-- CLEAN UI PRO HTML ADMIN TEMPLATE MODULES-->
    <link rel="stylesheet" type="text/css" href="/admin/components/kit/vendors/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/kit/core/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/kit/widgets/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/kit/apps/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/ecommerce/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/dashboards/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/system/auth/style.css">

    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/breadcrumbs/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/footer/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/menu-left/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/menu-top/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/sidebar/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/support-chat/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/components/cleanui/layout/topbar/style.css">


    <script src="/admin/components/kit/core/index.js"></script>
    <script src="/admin/components/cleanui/layout/menu-left/index.js"></script>
    <script src="/admin/components/cleanui/layout/menu-top/index.js"></script>
    <script src="/admin/components/cleanui/layout/sidebar/index.js"></script>
    <script src="/admin/components/cleanui/layout/support-chat/index.js"></script>
    <script src="/admin/components/cleanui/layout/topbar/index.js"></script>
    {{--angular cdn--}}
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


    <script>
        var app = angular.module('myApp', []);

    </script>
</head>

<body class="cui__layout--cardsShadow cui__menuLeft--dark" ng-app="myApp">
<div class="initial__loading"></div>
<div class="cui__layout cui__layout--hasSider">


    @include('includes.admin.sidebar')
    <div class="cui__menuLeft__backdrop"></div>

    <div class="cui__layout">
        @include('includes.admin.topbar')


        @yield('content')

        @include('includes.admin.footer')
    </div>
</div>


</body>


</html>
