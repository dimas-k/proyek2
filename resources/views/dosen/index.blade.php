<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/polindra21.png') }}" />

    <!-- TITLE -->
    <title>SIKI POLINDRA | Dosen | Dashbord</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets-user/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets-user/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-user/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-user/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets-user/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets-user/colors/color1.css') }}" />
    @yield('css')
    <base href="{{ asset('assets-user') }}/">

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    {{-- <div id="global-loader">
        <img src={{ asset('assets-user/images/loader.svg') }} class="loader-img" alt="Loader">
    </div> --}}
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('dosen.layout.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('dosen.layout.sidebar')

            <!--app-content open-->
            @include('dosen.layout.content')
            <!--app-content close-->

        </div>

        <!-- FOOTER -->
        @include('dosen.layout.footer')
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets-user/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets-user/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets-user/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets-user/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets-user/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets-user/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets-user/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets-user/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('assets-user/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets-user/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('assets-user/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assets-user/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- C3 CHART JS -->
    <script src="{{ asset('assets-user/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/charts-c3/c3-chart.js') }}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{ asset('assets-user/js/charts.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('assets-user/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('assets-user/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets-user/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('assets-user/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assets-user/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assets-user/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets-user/js/custom.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // hak cipta
        const hcTolak = document.getElementById('hcTolak').value;
        const hcTerima = document.getElementById('hcTerima').value;
        const hcKet = document.getElementById('hcKet').value;

        // paten
        const patenPF = document.getElementById('patenPF').value;
        const patenMTF = document.getElementById('patenMTF').value;
        const patenMP = document.getElementById('patenMP').value;
        const patenMPS = document.getElementById('patenMPS').value;
        const patenSTAW = document.getElementById('patenSTAW').value;
        const patenSTL = document.getElementById('patenSTL').value;
        const patenSTAK = document.getElementById('patenSTAK').value;
        const patenMTS = document.getElementById('patenMTS').value;
        const patenDI = document.getElementById('patenDI').value;
        const patenDK = document.getElementById('patenDK').value;

        //Desain Industri
        const desainDi = document.getElementById('desainDi').value;
        const desainDK = document.getElementById('desainDK').value;
        const desainP = document.getElementById('desainP').value;
        const desainKBL = document.getElementById('desainKBL').value;
        const desainDPU = document.getElementById('desainDPU').value;



        const paten = document.getElementById('paten-chart').getContext('2d');
        const hc = document.getElementById('hc-chart').getContext('2d');
        const di = document.getElementById('di-chart').getContext('2d');

        const patenChart = new Chart(paten, {
            type: 'bar',
            data: {
                labels: ['Diberi', 'Ditolak', 'Pemeriksaan Formalitas','Menunggu pembayaran substansif','Menunggu tanggapan substansif','Substansif tahap awal','Substansi tahap lanjut','Substansi tahap akhir','Masa pengumuman','Menunggu tanggapan formalitas'],
                datasets: [
                    {
                    label: 'PATEN',
                    data: [patenDI,patenDK,patenPF,patenMPS,patenMTS,patenSTAW,patenSTL,patenSTAK,patenMP,patenMTF],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                },
            ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const hcChart = new Chart(hc, {
            type: 'bar',
            data: {
                labels: ['Keterangan belum lengkap', 'Ditolak', 'Diterima'],
                datasets: [
                    {
                    label: 'HAK CIPTA',
                    data: [hcKet, hcTolak, hcTerima],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 2
                },
            ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const diChart = new Chart(di, {
            type: 'bar',
            data: {
                labels: ['Ditolak', 'Diberi','Pemeriksaan','Dalam proses usulan','Keterangan belum lengkap'],
                datasets: [
                    {
                    label: 'DESAIN INDUSTRI',
                    data: [desainDK, desainDi, desainP,desainDPU,desainKBL],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                },
            ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>