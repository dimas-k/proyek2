<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Hak Cipta | Pengajuan</title>
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
                        <i class="bi bi-file-earmark-plus me-2"></i>Pengajuan Hak Cipta Umum
                    </h3>
                    <hr class="border border-black border-2 opacity-75">
                    <form method="post" enctype="multipart/form-data" action="/admin/hak-cipta/tambah/umum/store"
                        id="uploadForm">
                        @csrf
                        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                        <div class="container">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="user_id">Pilih Pemilik Hak Cipta</label>
                                    <select name="user_id" id="user_id" class="form-control" onchange="updateNamaLengkap()">
                                        <option value="" selected disabled>Pilih Nama</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" data-nama="{{ $user->nama_lengkap }}">
                                                {{ $user->nama_lengkap }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama akan terisi otomatis" readonly>
                                </div>
                                {{-- @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat"
                                    name="alamat">
                                {{-- @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon" class="form-label">No telepon</label>
                                <input type="number" class="form-control" id="no_telepon"
                                    placeholder="Masukkan No telepon" name="no_telepon">
                                {{-- @error('no_telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control "
                                    >
                                {{-- @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="ktp" class="form-label">KTP Inventor</label>
                                <input type="file" class="form-control" id="ktp" name="ktp_inventor">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('ktp_inventor')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email"
                                    name="email">
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
                                    value="{{ old('kewarganegaraan') }}">
                                {{-- @error('kewarganegaraan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="pos"
                                    placeholder="Masukkan Kode Pos" name="kode_pos">
                                {{-- @error('kode_pos')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <input type="text" class="form-control @error('institusi') is-invalid @enderror"
                                id="" value="Umum" name="institusi" hidden>
                        </div>

                        <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR HAK CIPTA</p>
                        <div class="container">
                            <div class="mb-3">
                                @include('admin.layout.jenis-ciptaan')
                                {{-- @error('jenis_ciptaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="judul_ciptaan" class="form-label">Judul Ciptaan</label>
                                <input type="text"
                                    class="form-control @error('judul_ciptaan') is-invalid @enderror"
                                    placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan" id="judul_ciptaan"
                                    value="{{ old('judul_ciptaan') }}">
                                {{-- @error('judul_ciptaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="uraian" class="form-label">Uraian Singkat Ciptaan</label>
                                <textarea class="form-control" placeholder="Masukkan Uraian Singkat" name="uraian_singkat" id="uraian"
                                    style="height: 150px"></textarea>
                                {{-- @error('uarian_singkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="invensi" class="form-label">Dokumen Invensi (Manual
                                    Book/Buku/Dll)</label>
                                <input type="file" class="form-control " placeholder="" name="dokumen_invensi"
                                    id="invensi">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('dokumen_invensi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="surat_pengalihan">Surat Pengalihan Hak Cipta</label>
                                <input type="file" class="form-control " placeholder="" name="surat_pengalihan"
                                    id="surat_pengalihan">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('surat_pengalihan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pernyataan" class="form-label">Surat Pernyataan</label>
                                <input type="file" id="pernyataan" class="form-control " placeholder=""
                                    name="surat_pernyataan">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('surat_pernyataan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                    class="form-control">
                                {{-- @error('tanggal_permohonan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap Isi semua
                                Form Dengan
                                Benar</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
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
        <script>
            function updateNamaLengkap() {
                var select = document.getElementById("user_id");
                var selectedOption = select.options[select.selectedIndex];
                var namaLengkap = selectedOption.getAttribute("data-nama");
        
                document.getElementById("nama_lengkap").value = namaLengkap;
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#uploadForm').submit(function(e) {
                    e.preventDefault(); // Prevent automatic form submission
            
                    // Non-file inputs
                    const fields = {
                        nama: $('#nama_lengkap').val(),
                        alamat: $('#alamat').val(),
                        telepon: $('#no_telepon').val(),
                        tanggal_lahir: $('#tanggal_lahir').val(),
                        email: $('#email').val(),
                        warga: $('#warga').val(),
                        pos: $('#pos').val(),
                        jenis_ciptaan: $('#jenis_ciptaan').val(),
                        judul_ciptaan: $('#judul_ciptaan').val(),
                        uraian: $('#uraian').val(),
                        tanggal_pengajuan: $('#tanggalpengajuan').val()
                    };
            
                    // File inputs
                    const files = {
                        ktp: $('#ktp')[0].files[0],
                        invensi: $('#invensi')[0].files[0],
                        surat_pengalihan: $('#surat_pengalihan')[0].files[0],
                        pernyataan: $('#pernyataan')[0].files[0]
                    };
            
                    const maxSize = 10 * 1024 * 1024; // Max size 10 MB
                    const allowedExtension = /\.pdf$/i;
            
                    // Function to show error messages
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
                    for (const [key, value] of Object.entries(fields)) {
                        if (!value) {
                            showError(`Tolong Masukkan ${key.replace('_', ' ').toUpperCase()} Anda!`);
                            return false;
                        }
                    }
            
                    // Validate file inputs
                    for (const [key, file] of Object.entries(files)) {
                        if (!file) {
                            showError(`Tolong Masukkan ${key.replace('_', ' ').toUpperCase()} Anda!`);
                            return false;
                        }
                        if (!allowedExtension.test(file.name)) {
                            showError(`Tolong Masukkan ${key.replace('_', ' ').toUpperCase()} Dengan Ekstensi .pdf!`);
                            return false;
                        }
                        if (file.size > maxSize) {
                            showError(`Ukuran File ${key.replace('_', ' ').toUpperCase()} Lebih Dari 10 MB!`);
                            return false;
                        }
                    }
            
                    // If validation passes, submit the form
                    this.submit();
                });
            });
            </script>
            
</body>

</html>
