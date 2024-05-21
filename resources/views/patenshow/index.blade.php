<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>SIKI POLINDRA | Lihat Data Paten </title>
</head>

<body>
    <div class="container-fluid">
        <div class="bg-light rounded border p-4 mt-3">
            <a href="/paten" class="link-dark link-underline link-underline-opacity-0 mb-5 "><i class="bi bi-arrow-left-circle mb-5" style="font-size: 30px;"></i></a>
            <h3 class=""><i class="bi bi-clipboard2-data me-2 mt-5"></i>Data Paten</h3>

            <div class="border border-2 border-dark rounded"></div>
            <div class="table-responsive p-2">
                <table class="table table-borderless ">

                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{ $paten->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>: {{ $paten->alamat }}</td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td>: {{ $paten->no_telepon }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Paten</th>
                        <td>: {{ $paten->jenis_paten }}</td>
                    </tr>
                    <tr>
                        <th>Judul Paten</th>
                        <td>: {{ $paten->judul_paten }}</td>
                    </tr>
                    <tr>
                        <th>Abstrak Paten</th>
                        <td>: <a href={{ asset('storage/' . $paten->abstrak_paten) }} class=""
                                target="_blank">Lihat Abstrak Paten</a></td>
                    </tr>
                    <tr>
                        <th>Deskripsi Paten</th>
                        <td>: <a href={{ asset('storage/' . $paten->deskripsi_paten) }} class=""
                                target="_blank">Lihat Deskripsi Paten</a></td>
                    </tr>
                    <tr>
                        <th>Gambar Paten</th>
                        <td>: <a href={{ asset('storage/' . $paten->gambar_paten) }} class=""
                                target="_blank">Lihat Gambar paten</a></td>
                    </tr>
                    <tr>
                        <th>Gambar Tampilan</th>
                        <td>: <a href={{ asset('storage/' . $paten->gambar_tampilan) }} class=""
                                target="_blank">Lihat Gambar Tampilan</a></td>
                    </tr>
                    <tr>
                        <th>Tanggal pengajuan</th>
                        <td>{{ $paten->tanggal_permohonan }}</td>
                    </tr>
                    <tr>
                        <th>Status Paten</th>
                        <td>: {{ $paten->status }}</td>
                    </tr>
                </table>
            </div>
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
