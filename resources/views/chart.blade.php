<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cours</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .section {
        height: 100vh; /* 100% de la hauteur de la fenêtre du navigateur */
    }

    .card-body {
        height: 100%; /* La carte occupe toute la hauteur de la section */
    }

    .echart {
        width: 100%;
        height: 100%;
    }
  </style>
</head>
<body>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cours</h5>

                    <!-- Candle Stick Chart -->
                    <div>
                        <div id="candleStickChart" style="min-height: 1000px;" class="echart"></div>

                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#candleStickChart")).setOption({
                                xAxis: {
                                    data: ['2017-10-24', '2017-10-25', '2017-10-26', '2017-10-27']
                                },
                                yAxis: {},
                                series: [{
                                    type: 'candlestick',
                                    data: [
                                        [20, 34, 10, 38],
                                        [40, 35, 30, 50],
                                        [31, 38, 33, 44],
                                        [38, 15, 5, 42]
                                    ],
                                    barWidth: '5%',
                                    gap: 0
                                }]
                                });
                            });
                            </script>
                            <!-- End Candle Stick Chart -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
