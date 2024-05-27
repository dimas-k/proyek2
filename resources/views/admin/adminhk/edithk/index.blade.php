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
    <title>SIKI POLINDRA-Admin | Edit Hak Cipta</title>
</head>

<body>
    <div class="container">
        <a href="/admin/hak-cipta" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 35px;"></i></a>
        <form enctype="multipart/form-data" method="post" action={{ Route('admin_hakcipta.update', $hk->id) }}>
            @csrf
            <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
            <div class="container">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                        id="" placeholder="Masukkan Nama"name="nama_lengkap" value="{{ $hk->nama_lengkap }}">
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id=""
                        placeholder="Masukkan Alamat" name="alamat" value="{{ $hk->alamat }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No telepon</label>
                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id=""
                        placeholder="Masukkan No telepon" name="no_telepon" value="{{ $hk->no_telepon }}">
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id=""
                        class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $hk->tanggal_lahir }}">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">KTP Inventor</label>
                    <input type="file" class="form-control @error('ktp_inventor') is-invalid @enderror"
                        id="" name="ktp_inventor" value="{{ $hk->ktp_inventor }}">
                    @error('ktp_inventor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id=""
                        placeholder="Masukkan Email" name="email" value="{{ $hk->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kewarganegaraan</label>
                    <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror"
                        id="" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan" value="{{ $hk->kewarganegaraan }}">
                    @error('kewarganegaraan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" id=""
                        placeholder="Masukkan Kode Pos" name="kode_pos" value="{{ $hk->kode_pos }}">
                    @error('kode_pos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR HAK CIPTA</p>
            <div class="container">
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Ciptaan</label>
                    <input type="text" class="form-control @error('jenis_ciptaan') is-invalid @enderror" placeholder="Masukkan Jenis Ciptaan"
                        name="jenis_ciptaan" value="{{ $hk->jenis_ciptaan }}">
                        @error('jenis_ciptaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul Ciptaan</label>
                    <input type="text" class="form-control @error('judul_ciptaan') is-invalid @enderror" placeholder="Masukkan Judul Ciptaan"
                        name="judul_ciptaan" value="{{ $hk->judul_ciptaan }}">
                        @error('judul_ciptaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Uraian Singkat Ciptaan</label>
                    <textarea class="form-control @error('uarian_singkat') is-invalid @enderror" placeholder="" name="uraian_singkat" id="floatingTextarea2"
                        style="height: 150px" value="{{ $hk->uraian_singkat }}">{{ $hk->uraian_singkat }}</textarea>
                        @error('uarian_singkat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dokumen Invensi (Manual Book/Buku/Dll)</label>
                    <input type="file" class="form-control @error('dokumen_invensi') is-invalid @enderror" placeholder="" name="dokumen_invensi" value="{{ $hk->dokumen_invensi }}">
                    @error('dokumen_invensi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pengalihan Hak Cipta</label>
                    <input type="file" class="form-control @error('surat_pengalihan') is-invalid @enderror" placeholder="" name="surat_pengalihan" value="{{ $hk->surat_pengalihan }}">
                    @error('surat_pengalihan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pernyataan</label>
                    <input type="file" class="form-control @error('surat_pernyataan') is-invalid @enderror" placeholder="" name="surat_pernyataan" value="{{ $hk->surat_pernyataan }}">
                    @error('surat_pernyataan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Pengajuan</label>
                    <input type="date" name="tanggal_permohonan" id="tanggalpengajuan" class="form-control @error('tanggal_permohonan') is-invalid @enderror" value="{{ $hk->tanggal_permohonan }}">
                    @error('tanggal_permohonan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status Paten</label>
                    <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                        <option selected>Pilih Status Paten</option>
                        <option value="Tercatat">Tercatat</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Keterangan Belum Lengkap">Keterangan Belum Lengkap</option>
                      </select>
                      @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sertifikat Hak Cipta</label>
                    <input type="file" class="form-control @error('sertifikat_hakcipta') is-invalid @enderror" placeholder="Masukkan sertifikat" name="sertifikat_hakcipta" value="{{ $hk->sertifikat_hakcipta }}">
                    @error('sertifikat_hakcipta')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-5">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
