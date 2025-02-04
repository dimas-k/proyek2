<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA || Hak Cipta Jurusan</title>
</head>

<body>
    @include('layout.nav')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <a href="/hak-cipta" class="link-dark link-underline link-underline-opacity-0 mb-5 "><i
                class="bi bi-arrow-left-circle mb-5" style="font-size: 35px;"></i></a>
        <div class="rounded border shadow-sm p-4 mb-5 mt-4">
            <form action="/hak-cipta/list/jurusan/cari" method="POST" class="ms-2">
                @csrf
                <label for="" class="form-label me-4">Cari Jurusan</label>
                <select class="form-select-sm" aria-label="Default select example" name="jurusan" style="width: 1050px">
                    <option>-</option>
                    <option>-</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik">Teknik</option>
                    <option value="Kesehatan">Kesehatan</option>
                </select>
                <button type="submit" class="btn btn-sm btn-primary ms-3">Cari</button>
            </form>
        </div>
        <div class="rounded border shadow-sm p-4 mb-5">
            <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-2"></i>Daftar Hak Cipta Jurusan
                @foreach ($jurusan as $jur)
                    {{ $jur->jurusan }}
                    @break
                @endforeach
            </h3>
            <table class="table table-hover font-family-Kokoro">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Jenis Ciptaan</th>
                        <th scope="col">Judul Ciptaan</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Tanggal pengajuan</th>
                        <th scope="col">Status paten</th>
                        {{-- <th scope="col">Detail Pengajuan</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jurusan as $i => $p)
                        <tr>
                            <th scope="row">{{ ($jurusan->currentPage() - 1) * $jurusan->perPage() + $loop->iteration }}</th>
                            <td>{{ $p->nama_lengkap }}</td>
                            <td>{{ $p->jenis_ciptaan }}</td>
                            <td>{{ $p->judul_ciptaan }}</td>
                            <td>{{ $p->jurusan }}</td>
                            <td>{{ $p->prodi }}</td>
                            <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y') }}</td>
                            <td>{{ $p->status }}</td>
                            {{-- <td><a class="btn btn-primary" href={{ Route('paten.show', $p->id) }}>Selengkapnya</a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $jurusan->links() }}
        </div>
    </div>
    <!-- Footer -->
    @include('layout.footer')
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
