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
    <title>SIKI POLINDRA-Admin | Data Paten {{ $di->nama_lengkap }}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-light rounded border p-4 mt-3">
            <h3 class=""><i class="bi bi-clipboard2-data me-2"></i>Data Desain Industri</h3>

            <div class="border border-2 border-dark rounded"></div>
            <p class="mb-3 mt-3">Nama Lengkap : {{ $di->nama_lengkap }}</p>

            <p class="mb-3">Alamat : {{ $di->alamat }}</p>

            <p class="mb-3">No Telepon : {{ $di->no_telepon }}</p>

            <p class="mb-3">Tanggal Lahir : {{ $di->tanggal_lahir }}</p>

            <p class="mb-3">Ktp : <a href={{ asset('storage/' . $di->ktp_inventor) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Ktp</a></p>

            <p class="mb-3">Email : {{ $di->email }}</p>

            <p class="mb-3">Kewarganegaraan : {{ $di->kewarganegaraan }}</p>

            <p class="mb-3">Kode pos : {{ $di->kode_pos }}</p>

            <p class="mb-3">Jenis Desain : {{ $di->jenis_di }}</p>

            <p class="mb-3">Judul Desain : {{ $di->judul_di }}</p>

            <p class="mb-3">Gambar Desain Industri : <a href={{ asset('storage/' . $di->gambar_di) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Gambar Desain Industri</a></a></p>

            <p class="mb-3">Uraian Desain industri : <a href={{ asset('storage/' . $di->uraian_di) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Uraian Desain industri</a></a></p>

            <p class="mb-3">Surat Kepemilikan : <a
                    href={{ asset('storage/' . $di->surat_kepengalihan) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Surat Kepemilikan</a></a></p>

            <p class="mb-3">Surat Pengalihan : <a href={{ asset('storage/' . $di->surat_pengalihan) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Surat pengalihan</a></a></p>

            <p class="mb-3">Tanggal Pengajuan : {{ $di->tanggal_permohonan }}</p>

            <p class="mb-3">Gambar Paten : {{ $di->status }}</p>
            
            <a class="btn btn-info p-2" href="/admin/desain-industri">Kembali</a>
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
