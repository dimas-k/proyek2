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
    <title>SIKI POLINDRA-Admin | Data Paten {{ $p->nama_lengkap }}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-light rounded border p-4 mt-3">
            <h3 class=""><i class="bi bi-clipboard2-data me-2"></i>Data Paten</h3>

            <div class="border border-2 border-dark rounded"></div>
            <p class="mb-3 mt-3"><b>Nama Lengkap</b> : {{ $p->nama_lengkap }}</p>

            <p class="mb-3"><b>Alamat</b> : {{ $p->alamat }}</p>

            <p class="mb-3"><b>No Telepon</b> : {{ $p->no_telepon }}</p>

            <p class="mb-3"><b>Tanggal Lahir</b> : {{ $p->tanggal_lahir }}</p>

            <p class="mb-3"><b>Ktp</b> : <a href={{ asset('storage/' . $p->ktp_inventor) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Ktp</a></p>

            <p class="mb-3"><b>Email</b> : {{ $p->email }}</p>

            <p class="mb-3"><b>Kewarganegaraan</b> : {{ $p->kewarganegaraan }}</p>

            <p class="mb-3"><b>Kode pos</b> : {{ $p->kode_pos }}</p>

            <p class="mb-3"><b>Jenis Paten</b> : {{ $p->jenis_paten }}</p>

            <p class="mb-3"><b>Judul Paten</b> : {{ $p->judul_paten }}</p>

            <p class="mb-3"><b>Abstrak Paten</b> : <a href={{ asset('storage/' . $p->abstrak_paten) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Abstrak Paten</a></a></p>
            
            <p class="mb-3"><b>Deskripsi Paten</b> : <a href={{ asset('storage/' . $p->deskripsi_paten) }}
                class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                    class="bi bi-download me-1 ms-1"></i>Download Deskripsi Paten</a></a></p>

            <p class="mb-3"><b>Pengalihan Hak Invensi</b> : <a href={{ asset('storage/' . $p->pengalihan_hak) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Pengalihan Hak Invensi</a></a></p>

            <p class="mb-3"><b>Klaim</b> : <a href={{ asset('storage/' . $p->klaim) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Klaim Paten</a></a></p>

            <p class="mb-3"><b>Pernyataan kepemikikan Inventor</b> : <a
                    href={{ asset('storage/' . $p->pernyataan_kepemilikan) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Pernyataan kepemikikan Inventor</a></a></p>

            <p class="mb-3"><b>Surat Kuasa</b> : <a href={{ asset('storage/' . $p->surat_kuasa) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Surat Kuasa</a></a></p>

            <p class="mb-3"><b>Gambar Paten</b> : <a href={{ asset('storage/' . $p->gambar_paten) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Gambar Paten</a></a></p>

            <p class="mb-3"><b>Gambar Tampilan</b> : <a href={{ asset('storage/' . $p->gambar_paten) }}
                    class="link-dark link-underline link-underline-opacity-0" target="_blank"><i
                        class="bi bi-download me-1 ms-1"></i>Download Gambar Tampilan</a></a></p>

            <p class="mb-3"><b>Tanggal Pengajuan</b> : {{ $p->tanggal_permohonan }}</p>

            <p class="mb-3"><b>Status Paten</b> : {{ $p->status }}</p>
            
            <a class="btn btn-info p-2" href="/admin/paten">Kembali</a>
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
