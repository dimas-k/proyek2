<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Paten | Edit</title>
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    {{-- Top nav bar --}}
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src={{ asset('assets/polindra2.jpg') }}>
                <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                    Intelektual<br>Politeknik Negeri Indramayu</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, {{ auth()->user()->nama_lengkap }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/logout"><i class="bi bi-arrow-bar-left me-2"></i>Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- end of top naavbar --}}
    <div class="container-fluid">
        <div class="row">
            {{-- Side bar --}}
            @include('admin.layout.sidenav')
            {{-- end of sidebar --}}
            <div class="col-lg-10 mt-2">
                <div class="container bg-light rounded border pt-3">
                    <h3 class="fw-normal font-family-Kokoro mb-3">
                        <i class="bi bi-file-earmark me-2"></i>Data Paten {{ $p->nama_lengkap }}
                    </h3>
                    <hr class="border border-black border-2 opacity-75">
                    <form class="p-2" enctype="multipart/form-data" method="post"
                        action={{ route('adm.update-data-paten', $p->id) }} id="uploadForm">
                        @csrf
                        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                        <div class="container">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap"
                                    placeholder="Masukkan Nama"name="nama_lengkap" value="{{ $p->nama_lengkap }}" readonly>
                                {{-- @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat"
                                    name="alamat" value="{{ $p->alamat }}">
                                {{-- @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon" class="form-label">No telepon</label>
                                <input type="number" class="form-control " id="no_telepon"
                                    placeholder="Masukkan No telepon" name="no_telepon" value="{{ $p->no_telepon }}">
                                {{-- @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahie" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                    value="{{ $p->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">

                                <label for="ktp" class="form-label">KTP Inventor</label> <br>
                                @if (!empty($p->ktp_inventor))
                                    File : {{ basename($p->ktp_inventor) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control" id="ktp" name="ktp_inventor">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('ktp_inventor')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control " id="email" placeholder="Masukkan Email"
                                    name="email" value="{{ $p->email }}">
                                {{-- @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="warga" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="warga"
                                    placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan"
                                    value="{{ $p->kewarganegaraan }}">
                                {{-- @error('kewarganegaraan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="pos"
                                    placeholder="Masukkan Kode Pos" name="kode_pos" value="{{ $p->kode_pos }}">
                                {{-- @error('kode_pos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <input type="text" class="form-control @error('institusi') is-invalid @enderror"
                                id="" value="Dosen" name="institusi" hidden>
                            <div class="mb-3">
                                <label for="data_pengaju2" class="form-label">Data Mahasiswa / Dosen <span
                                        class="text-danger">(masukan file jika ada perubahan)</span></label><br>
                                @if (!empty($p->data_pengaju2))
                                    File : {{ basename($p->data_pengaju2) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " name="data_pengaju2" id="data_pengaju2">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                {{-- @error('data_pengaju2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                {{-- @include('admin.layout.jurusan') --}}
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" aria-label="Default select example" name="jurusan"
                                    id="jurusan">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="Teknik Informatika"
                                        {{ old('jurusan', $p->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>
                                        Teknik Informatika</option>
                                    <option value="Teknik"
                                        {{ old('jurusan', $p->jurusan) == 'Teknik' ? 'selected' : '' }}>Teknik</option>
                                    <option value="Kesehatan"
                                        {{ old('jurusan', $p->jurusan) == 'Kesehatan' ? 'selected' : '' }}>Kesehatan
                                    </option>
                                </select>

                                {{-- @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                {{-- @include('admin.layout.prodi') --}}
                                <label for="prodi" class="form-label">Prodi</label>
                                <select class="form-select" aria-label="Default select example" name="prodi"
                                    id="prodi">
                                    <option value="">Pilih Prodi</option>
                                    <option value="D3 Teknik Informatika"
                                        {{ old('prodi', $p->prodi) == 'D3 Teknik Informatika' ? 'selected' : '' }}>D3
                                        Teknik Informatika</option>
                                    <option value="D4 Rekayasa Perangkat Lunak"
                                        {{ old('prodi', $p->prodi) == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                        D4 Rekayasa Perangkat Lunak</option>
                                    <option value="D4 Sistem Informasi Kota Cerdas"
                                        {{ old('prodi', $p->prodi) == 'D4 Sistem Informasi Kota Cerdas' ? 'selected' : '' }}>
                                        D4 Sistem Informasi Kota Cerdas</option>
                                    <option value="D3 Teknik Mesin"
                                        {{ old('prodi', $p->prodi) == 'D3 Teknik Mesin' ? 'selected' : '' }}>D3 Teknik
                                        Mesin</option>
                                    <option value="D4 Perancangan Manufaktur"
                                        {{ old('prodi', $p->prodi) == 'D4 Perancangan Manufaktur' ? 'selected' : '' }}>
                                        D4 Perancangan Manufaktur</option>
                                    <option value="D3 Teknik Pendingin dan Tata Udara"
                                        {{ old('prodi', $p->prodi) == 'D3 Teknik Pendingin dan Tata Udara' ? 'selected' : '' }}>
                                        D3 Teknik Pendingin dan Tata Udara</option>
                                    <option value="D4 Teknologi Rekayasa Instrumentasi dan Kontrol"
                                        {{ old('prodi', $p->prodi) == 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol' ? 'selected' : '' }}>
                                        D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                                    <option value="D3 Keperawatan"
                                        {{ old('prodi', $p->prodi) == 'D3 Keperawatan' ? 'selected' : '' }}>D3
                                        Keperawatan</option>
                                </select>
                                {{-- @error('prodi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                        </div>

                        <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR PATEN</p>
                        <div class="container">
                            <label for="paten" class="form-label">Jenis Paten</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_paten" value="Paten"
                                    id="paten"
                                    {{ old('jenis_paten', $p->jenis_paten) == 'Paten' ? 'checked' : '' }}>
                                <label class="form-check-label" for="paten">Paten</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_paten"
                                    value="Paten Sederhana" id="paten_s"
                                    {{ old('jenis_paten', $p->jenis_paten) == 'Paten Sederhana' ? 'checked' : '' }}>
                                <label class="form-check-label" for="paten_s">Paten Sederhana</label>
                            </div>
                            <div class="mb-3">
                                <label for="judul_paten" class="form-label">Judul Paten</label>
                                <input type="text" class="form-control" id="judul_paten"
                                    placeholder="Masukkan Judul Paten" name="judul_paten"
                                    value="{{ $p->judul_paten }}">
                                {{-- @error('judul_paten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="abstrak" class="form-label">Abstrak Paten</label><br>
                                @if (!empty($p->abstrak_paten))
                                    File : {{ basename($p->abstrak_paten) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control" id="abstrak" placeholder=""
                                    name="abstrak_paten">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('abstrak_paten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Paten</label><br>
                                @if (!empty($p->deskripsi_paten))
                                    File : {{ basename($p->deskripsi_paten) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " id="deskripsi" placeholder=""
                                    name="deskripsi_paten">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('deskripsi_paten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pengalihan_hak" class="form-label">Pengalihan Hak Invensi</label><br>
                                @if (!empty($p->pengalihan_hak))
                                    File : {{ basename($p->pengalihan_hak) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " id="pengalihan_hak" placeholder=""
                                    name="pengalihan_hak">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('pengalihan_hak')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="klaim" class="form-label">Klaim</label><br>
                                @if (!empty($p->klaim))
                                    File : {{ basename($p->klaim) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " id="klaim" placeholder=""
                                    name="klaim">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('klaim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="kepemilikan" class="form-label">Pernyataan kepemikikan
                                    Inventor</label><br>
                                @if (!empty($p->pernyataan_kepemilikan))
                                    File : {{ basename($p->pernyataan_kepemilikan) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control" id="kepemilikan" placeholder=""
                                    name="pernyataan_kepemilikan">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('pernyataan_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="kuasa" class="form-label">Surat kuasa</label><br>
                                @if (!empty($p->surat_kuasa))
                                    File : {{ basename($p->surat_kuasa) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " id="kuasa" placeholder=""
                                    name="surat_kuasa">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('surat_kuasa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="g_paten" class="form-label">gambar Paten</label><br>
                                @if (!empty($p->gambar_paten))
                                    File : {{ basename($p->gambar_paten) }}
                                @else
                                    File : Tidak ada
                                @endif
                                <input type="file" class="form-control " id="g_paten" placeholder=""
                                    name="gambar_paten">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('gambar_paten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="g_tampilan" class="form-label">gambar Tampilan</label><br>
                                @if (!empty($p->gambar_tampilan))
                                File : {{ basename($p->gambar_tampilan) }}
                            @else
                                File : Tidak ada
                            @endif
                                <input type="file" class="form-control " id="g_tampilan" placeholder=""
                                    name="gambar_tampilan">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                {{-- @error('gambar_tampilan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                    class="form-control " value="{{ $p->tanggal_permohonan }}">
                                {{-- @error('tanggal_permohonan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                Isi semua Form Dengan
                                Benar</p>
                            {{-- <button type="submit" class="btn btn-primary mt-3 ">Submit</button> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Simpan
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Perhatian
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin dengan data yang di inputkan ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">Tidak</button>
                                            <button type="submit" class="btn btn-primary">Yakin</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
            integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets-user/js/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- <script>
            $(document).ready(function() {
                $('#uploadForm').submit(function(e) {
                    e.preventDefault(); // Prevent automatic form submission
        
                    // Non-file inputs
                    const fields = {
                        nama: $('#nama_lengkap').val(),
                        alamat: $('#alamat').val(),
                        telepon: $('#no_telepon').val(),
                        tl: $('#tanggal_lahir').val(),
                        email: $('#email').val(),
                        warga: $('#warga').val(),
                        pos: $('#pos').val(),
                        jurusan: $('#jurusan').val(),
                        prodi: $('#prodi').val(),
                        judul_paten: $('#judul_paten').val(),
                        tanggal_pengajuan: $('#tanggalpengajuan').val(),
                        jenis_paten: $('input[name="jenis_paten"]:checked').val(),
                    };
        
                    // File inputs
                    const files = {
                        ktp: $('#ktp')[0].files[0],
                        anggota_inventor: $('#data_pengaju2')[0].files[0],
                        abstrak: $('#abstrak')[0].files[0],
                        deskripsi: $('#deskripsi')[0].files[0],
                        pengalihan_hak: $('#pengalihan_hak')[0].files[0],
                        klaim: $('#klaim')[0].files[0],
                        kepemilikan: $('#kepemilikan')[0].files[0],
                        kuasa: $('#kuasa')[0].files[0],
                        g_paten: $('#g_paten')[0].files[0],
                        g_tampilan: $('#g_tampilan')[0].files[0],
                    };
        
                    const maxSize = 10 * 1024 * 1024; // Max size: 10MB
                    const allowedExtensionPDF = /(\.pdf)$/i;
                    const allowedExtensionExcel = /(\.xlsx)$/i;
        
                    // Validation function
                    function showError(message) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: message,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
        
                    // Validate non-file inputs
                    for (var field in fields) {
                        if (!fields[field]) {
                            showError("Tolong Masukkan " + field.replace('_', ' ').toUpperCase() + " Anda!");
                            return false;
                        }
                    }
        
                    // List of mandatory file fields
                    const mandatoryFiles = ['ktp', 'abstrak', 'deskripsi', 'pengalihan_hak', 'klaim', 'kepemilikan', 'kuasa', 'g_paten', 'g_tampilan'];
        
                    // Validate file inputs
                    for (var file in files) {
                        // Check mandatory files that are empty
                        if (mandatoryFiles.includes(file) && !files[file]) {
                            showError("File " + file.replace('_', ' ').toUpperCase() + " Wajib Diisi!");
                            return false;
                        }
        
                        // Check file type for anggota inventor only
                        if (file === 'anggota_inventor' && files[file]) {
                            if (!allowedExtensionExcel.exec(files[file].name)) {
                                showError("Tolong Masukkan Data anggota inventor Dengan Ekstensi .xlsx!");
                                return false;
                            }
                        } else if (files[file]) {
                            // Validate other files
                            if (!allowedExtensionPDF.exec(files[file].name)) {
                                showError("Tolong Masukkan " + file.replace('_', ' ').toUpperCase() + " Dengan Ekstensi .pdf!");
                                return false;
                            }
        
                            // Validate file size
                            if (files[file].size > maxSize) {
                                showError("Ukuran File " + file.replace('_', ' ').toUpperCase() + " Lebih Dari 10 MB!");
                                return false;
                            }
                        }
                    }
        
                    // If all validations pass, submit the form
                    this.submit();
                });
            });
        </script> --}}
    </div>
</body>

</html>
