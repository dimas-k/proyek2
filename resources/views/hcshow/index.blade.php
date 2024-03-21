<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <title>SIKI POLINDRA | Data {{ $hc->judul_ciptaan }}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-light rounded border p-4 mt-3 border-top-black">
            <a href="/hak-cipta" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 30px;"></i></a>
            <h3 class=""><i class="bi bi-clipboard2-data me-2 mt-3"></i>Data Hak Cipta</h3>

            <div class="border border-2 border-dark rounded"></div>
            <p class="mb-3 mt-3"><b>Nama Lengkap</b> : {{ $hc->nama_lengkap }}</p>

            <p class="mb-3"><b>No Telepon</b> : {{ $hc->no_telepon }}</p>

            <p class="mb-3"><b>Kewarganegaraan</b> : {{ $hc->kewarganegaraan }}</p>

            <p class="mb-3"><b>Kode pos</b> : {{ $hc->kode_pos }}</p>

            <p class="mb-3"><b>Jenis Ciptaan</b> : {{ $hc->jenis_ciptaan }}</p>

            <p class="mb-3"><b>Judul Ciptaan</b> : {{ $hc->judul_ciptaan }}</p>

            <p class="mb-3"><b>Tanggal Pengajuan</b> : {{ $hc->tanggal_permohonan }}</p>

            <p class="mb-3"><b>Uraian Singkat</b> : {{ $hc->uraian_singkat }}</p>
            
            <p class="mb-3"><b>Sertifikat Hak Cipta</b> : <a href={{ asset('storage/' . $hc->sertifikat_hakcipta) }}
                class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                    class="bi bi-download me-1 ms-1"></i>Download Sertifikat Hak Cipta</a></a></p>

            <p class="mb-3"><b>Status</b> : {{ $hc->status }}</p>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
