<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/animate.min.css" }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/animation.css" }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/bootstrap.css" }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/bootstrap-select.min.css"}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/style.css" }}">
    <link rel="stylesheet" href="f{{ asset('backend/assets') . "/ont/fonts.css" }}">
    <link rel="stylesheet" href="{{ asset('backend/assets') . "/icon/style.css" }}">
    <link rel="shortcut icon" href="{{ asset('backend/assets') . "/images/favicon.ico" }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('backend/assets') . "/images/favicon.ico" }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/sweetalert.min.css" }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets') . "/css/custom.css" }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                @include('backend.partials.sidebar')
                <div class="section-content-right">
                    @include('backend.partials.header')
                    <div class="main-content">

                        @yield('content')
                        @include('backend.partials.footer')
                    </div>
                </div>










            </div>
        </div>
    </div>

    <script src="{{ asset('backend/assets') . "/js/jquery.min.js" }}"></script>
    <script src="{{ asset('backend/assets') . "/js/bootstrap.min.js" }}"></script>
    <script src="{{ asset('backend/assets') . "/js/bootstrap-select.min.js" }}"></script>
    <script src="{{ asset('backend/assets') . "/js/sweetalert.min.js" }}"></script>
    <script src="{{ asset('backend/assets') . "/js/apexcharts/apexcharts.js" }}"></script>
    <script src="{{ asset('backend/assets') . "/js/main.js" }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000",
        };




        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script>

    <script>

        (function ($) {

            var tfLineChart = (function () {

                var chartBar = function () {

                    var options = {
                        series: [{
                            name: 'Total',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Pending',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        },
                        {
                            name: 'Delivered',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Canceled',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }],
                        chart: {
                            type: 'bar',
                            height: 325,
                            toolbar: {
                                show: false,
                            },
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '10px',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        legend: {
                            show: false,
                        },
                        colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                        stroke: {
                            show: false,
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: '#212529',
                                },
                            },
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return "$ " + val + ""
                                }
                            }
                        }
                    };

                    chart = new ApexCharts(
                        document.querySelector("#line-chart-8"),
                        options
                    );
                    if ($("#line-chart-8").length > 0) {
                        chart.render();
                    }
                };

                /* Function ============ */
                return {
                    init: function () { },

                    load: function () {
                        chartBar();
                    },
                    resize: function () { },
                };
            })();

            jQuery(document).ready(function () { });

            jQuery(window).on("load", function () {
                tfLineChart.load();
            });

            jQuery(window).on("resize", function () { });
        })(jQuery);
    </script>
</body>

</html>