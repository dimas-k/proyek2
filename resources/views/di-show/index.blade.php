<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <title>SIKI POLINDRA | Data {{ $di->judul_desain }}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-light rounded border p-4 mt-3 border-top-black">
            <a href="/desain-industri" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 30px;"></i></a>
            <h3 class=""><i class="bi bi-clipboard2-data me-2 mt-3"></i>Data Desain Industri</h3>

            <div class="border border-2 border-dark rounded"></div>
            <p class="mb-3 mt-3"><b>Nama Lengkap</b> : {{ $di->nama_lengkap }}</p>

            <p class="mb-3"><b>No Telepon</b> : {{ $di->no_telepon }}</p>

            <p class="mb-3"><b>Kewarganegaraan</b> : {{ $di->kewarganegaraan }}</p>

            <p class="mb-3"><b>Kode pos</b> : {{ $di->kode_pos }}</p>

            <p class="mb-3"><b>Jenis Desain</b> : {{ $di->jenis_desain }}</p>

            <p class="mb-3"><b>Judul Desain</b> : {{ $di->judul_desain }}</p>

            <p class="mb-3"><b>Gambar Desain Industri</b> : <a href={{ asset('storage/' . $di->gambar_di) }}
                class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                    class="bi bi-download me-1 ms-1"></i>Download Gambar Desain Industri</a></a></p>

            <p class="mb-3"><b>Uraian Desain industri</b> : <a href={{ asset('storage/' . $di->uraian_di) }}
                class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                    class="bi bi-download me-1 ms-1"></i>Download Uraian Desain industri</a></a></p>
            
            <p class="mb-3"><b>Status</b> : {{ $di->status }}</p>

            <p class="mb-3"><b>Sertifikat Desain Industri</b> : <a href={{ asset('storage/' . $di->sertifikat_desain) }}
                class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                    class="bi bi-download me-1 ms-1"></i>Download Sertifikat Desain Industri</a></a></p>

            <p class="mb-3"><b>Tanggal Pengajuan</b> : {{ $di->tanggal_permohonan }}</p>

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
