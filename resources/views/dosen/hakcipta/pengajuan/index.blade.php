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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets-user/colors/color1.css') }}" />
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
            @include('dosen.hakcipta.pengajuan.content')
            <!--app-content close-->

        </div>


        <!-- FOOTER -->
        @include('dosen.layout.footer')
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>



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
    <!-- JQUERY JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <script>
        $(document).ready(function() {
            $('#uploadForm').submit(function(e) {
                e.preventDefault(); // Mencegah form terkirim secara otomatis

                // non file
                var nama = $('#nama_lengkap').val();
                var alamat = $('#alamat').val();
                var telepon = $('#no_telepon').val();
                var tl = $('#tanggal_lahir').val();
                var email = $('#email').val();
                var warga = $('#warga').val();
                var pos = $('#pos').val();
                var jurusan = $('#jurusan').val();
                var prodi = $('#prodi').val();
                var jenis_ciptaan = $('#jenis_ciptaan').val();
                var judul_ciptaan = $('#judul_ciptaan').val();
                var uraian = $('#uraian').val();
                var tanggal_pengajuan = $('#tanggalpengajuan').val();

                //file
                var ktp = $('#ktp')[0].files[0];
                var pengaju = $('#pengaju2')[0].files[0];
                var invensi = $('#invensi')[0].files[0];
                var surat_pengalihan = $('#surat_pengalihan')[0].files[0];
                var pernyataan = $('#pernyataan')[0].files[0];

                // var errorMessage = ''; // Variabel untuk menyimpan pesan error

                // Validasi Nama Lengkap
                if (!nama) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Nama Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }

                // Validasi Tanggal Lahir
                if (!alamat) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Alamat Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!telepon) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan No Telepon Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!tl) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Tangal Lahir Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!email) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Tangal Lahir Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!warga) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Kewarganegaraan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!pos) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Kode Pos Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (jurusan === "") {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Jurusan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (prodi === "") {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Prodi Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!jenis_ciptaan) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Jenis Ciptaan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!judul_ciptaan) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Judul Ciptaan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!tanggal_pengajuan) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Tanggal Pengajuan!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!uraian) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Uraian Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }

                // Validasi File
                if (!ktp) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan KTP Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!invensi) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Dokumen Invensi Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!surat_pengalihan) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Surat Pengalihan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }
                if (!pernyataan) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops... Ada yang salah...",
                        text: "Tolong Masukkan Surat Pernyataan Anda!",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                } else {
                    var allowedExtension = /(\.pdf)$/i; // Hanya memperbolehkan file berformat PDF
                    var allowedExtensionExel = /(\.xlsx)$/i; // Hanya memperbolehkan file berformat exel
                    var maxSize = 2 * 1024 * 1024; // Maksimal ukuran file adalah 2 MB

                    // Validasi ekstensi file
                    if (pengaju) {
                        // Jika file ada, cek apakah ekstensi sesuai
                        if (!allowedExtensionExel.exec(pengaju.name)) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Tolong Masukkan Data Mahasiswa Dan Atau Dosen Dengan Ekstensi .xlsx",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false; // Gagal, form tidak dikirim
                        }
                    }
                    if (!allowedExtension.exec(ktp.name)) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan KTP Dengan Ekstensi .pdf!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!allowedExtension.exec(invensi.name)) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Dokumen Invensi Dengan Ekstensi .pdf!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!allowedExtension.exec(surat_pengalihan.name)) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Surat Pengalihan Dengan Ekstensi .pdf!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!allowedExtension.exec(pernyataan.name)) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Surat pernyataan Dengan Ekstensi .pdf!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }

                    // Validasi ukuran file
                    if (ktp.size > maxSize) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Ukuran File KTP Lebih Dari 2mb!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (invensi.size > maxSize) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Ukuran File Dokumen Invensi Lebih Dari 2mb!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (surat_pengalihan.size > maxSize) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Ukuran File Surat Pengalihan Lebih Dari 2mb!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (pernyataan.size > maxSize) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Ukuran File Surat Pernyataan Lebih Dari 2mb!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                }

                // // Jika ada error, tampilkan pesan melalui alert dan cegah pengiriman form
                // if (errorMessage !== '') {
                //     alert(errorMessage);
                //     return false; // Mencegah pengiriman form
                // }

                // Jika validasi berhasil, submit form
                this.submit();
            });
        });
    </script>


</body>

</html>
