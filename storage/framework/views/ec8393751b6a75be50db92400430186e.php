<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA-Admin | Paten | Edit</title>
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src=<?php echo e(asset('assets/polindra2.jpg')); ?>>
                <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                    Intelektual<br>Politeknik Negeri Indramayu</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, <?php echo e(auth()->user()->nama_lengkap); ?>

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
    
    <div class="container-fluid">
        <div class="row">
            
            <?php echo $__env->make('admin.layout.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="col-lg-10 mt-2">
                <div class="container bg-light rounded border pt-3">
                    <h3 class="fw-normal font-family-Kokoro mb-3">
                        <i class="bi bi-file-earmark me-2"></i>Data Hak Cipta <?php echo e($hk->nama_lengkap); ?>

                    </h3>
                    <hr class="border border-black border-2 opacity-75">
                    <form enctype="multipart/form-data" method="post"
                        action=<?php echo e(route('admin_hakcipta.update_dosen', $hk->id)); ?> id="uploadForm">
                        <?php echo csrf_field(); ?>
                        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                        <div class="container">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control " id="nama_lengkap"
                                    placeholder="Masukkan Nama"name="nama_lengkap" value="<?php echo e($hk->nama_lengkap); ?>" readonly>
                                
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control " id="alamat" placeholder="Masukkan Alamat"
                                    name="alamat" value="<?php echo e($hk->alamat); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon" class="form-label">No telepon</label>
                                <input type="number" class="form-control" id="no_telepon"
                                    placeholder="Masukkan No telepon" name="no_telepon" value="<?php echo e($hk->no_telepon); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control "
                                    value="<?php echo e($hk->tanggal_lahir); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="ktp" class="form-label">KTP Inventor</label><br>
                                <?php if(!empty($hk->ktp_inventor)): ?>
                                    File : <?php echo e(basename($hk->ktp_inventor)); ?>

                                <?php else: ?>
                                    File : Tidak ada
                                <?php endif; ?>
                                <input type="file" class="form-control " id="ktp" name="ktp_inventor">

                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control " id="email" placeholder="Masukkan Email"
                                    name="email" value="<?php echo e($hk->email); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="warga" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control " id="warga"
                                    placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan"
                                    value="<?php echo e($hk->kewarganegaraan); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control " id="pos"
                                    placeholder="Masukkan Kode Pos" name="kode_pos" value="<?php echo e($hk->kode_pos); ?>">
                                
                            </div>
                            <input type="text" class="form-control " id="" value="Dosen"
                                name="institusi" hidden>
                            <div class="mb-3">

                                <label for="data_pengaju2" class="form-label">Data Mahasiswa / Dosen <span
                                        class="text-danger">(masukan file jika ada perubahan)</span></label><br>
                                <?php if(!empty($hk->data_pengaju2)): ?>
                                    File : <?php echo e(basename($hk->data_pengaju2)); ?>

                                <?php else: ?>
                                    File : Tidak ada
                                <?php endif; ?>
                                <input type="file"
                                    class="form-control <?php $__errorArgs = ['data_pengaju2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="data_pengaju2" id="data_pengaju2">

                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                
                            </div>
                            <div class="mb-3">
                                
                                <tr>
                                    <th>jurusan</th>
                                    <td>
                                        <select class="form-select" aria-label="Default select example"
                                            name="jurusan" id="jurusan">
                                            <option value="">Pilih Jurusan</option>
                                            <option value="Teknik Informatika"
                                                <?php echo e(old('jurusan', $hk->jurusan) == 'Teknik Informatika' ? 'selected' : ''); ?>>
                                                Teknik Informatika</option>
                                            <option value="Teknik"
                                                <?php echo e(old('jurusan', $hk->jurusan) == 'Teknik' ? 'selected' : ''); ?>>Teknik
                                            </option>
                                            <option value="Kesehatan"
                                                <?php echo e(old('jurusan', $hk->jurusan) == 'Kesehatan' ? 'selected' : ''); ?>>
                                                Kesehatan</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </div>
                            <div class="mb-3">
                                
                                <tr>
                                    <th>prodi</th>
                                    <td>
                                        <select class="form-select" aria-label="Default select example"
                                            name="prodi" id="prodi">
                                            <option value="">Pilih Prodi</option>
                                            <option value="D3 Teknik Informatika"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D3 Teknik Informatika' ? 'selected' : ''); ?>>
                                                D3 Teknik Informatika</option>
                                            <option value="D4 Rekayasa Perangkat Lunak"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : ''); ?>>
                                                D4 Rekayasa Perangkat Lunak</option>
                                            <option value="D4 Sistem Informasi Kota Cerdas"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D4 Sistem Informasi Kota Cerdas' ? 'selected' : ''); ?>>
                                                D4 Sistem Informasi Kota Cerdas</option>
                                            <option value="D3 Teknik Mesin"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D3 Teknik Mesin' ? 'selected' : ''); ?>>
                                                D3 Teknik Mesin</option>
                                            <option value="D4 Perancangan Manufaktur"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D4 Perancangan Manufaktur' ? 'selected' : ''); ?>>
                                                D4 Perancangan Manufaktur</option>
                                            <option value="D3 Teknik Pendingin dan Tata Udara"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D3 Teknik Pendingin dan Tata Udara' ? 'selected' : ''); ?>>
                                                D3 Teknik Pendingin dan Tata Udara</option>
                                            <option value="D4 Teknologi Rekayasa Instrumentasi dan Kontrol"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol' ? 'selected' : ''); ?>>
                                                D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                                            <option value="D3 Keperawatan"
                                                <?php echo e(old('prodi', $hk->prodi) == 'D3 Keperawatan' ? 'selected' : ''); ?>>D3
                                                Keperawatan</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </div>
                        </div>
                        <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR HAK CIPTA</p>
                        <div class="container">
                            <div class="mb-3">
                                
                                <tr>
                                    <th>Jenis Ciptaan</th>
                                    <td>
                                        <label for="jenis_ciptaan" class="form-label">Jenis Ciptaan</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="jenis_ciptaan" id="jenis_ciptaan">
                                            <option value="">Pilih Jenis Hak Cipta</option>
                                            <option value="Karya Tulis"
                                                <?php echo e(old('jenis_ciptaan', $hk->jenis_ciptaan) == 'Karya Tulis' ? 'selected' : ''); ?>>
                                                Karya Tulis</option>
                                            <option value="Program Komputer"
                                                <?php echo e(old('jenis_ciptaan', $hk->jenis_ciptaan) == 'Program Komputer' ? 'selected' : ''); ?>>
                                                Program Komputer</option>
                                            <option value="Karya Lainnya"
                                                <?php echo e(old('jenis_ciptaan', $hk->jenis_ciptaan) == 'Karya Lainnya' ? 'selected' : ''); ?>>
                                                Karya Lainnya</option>
                                        </select>
                                    </td>
                                </tr>
                                
                            </div>
                            <div class="mb-3">
                                <label for="judul_ciptaan" class="form-label">Judul Ciptaan</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['judul_ciptaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan" id="judul_ciptaan"
                                    value="<?php echo e($hk->judul_ciptaan); ?>">
                                
                            </div>
                            <div class="mb-3">
                                <label for="uraian" class="form-label">Uraian Singkat Ciptaan</label>
                                <textarea class="form-control " placeholder="Masukkan Uraian Singkat" name="uraian_singkat" id="uraian"
                                    style="height: 150px"><?php echo e($hk->uraian_singkat); ?></textarea>
                                
                            </div>
                            <div class="mb-3">
                                <label for="invensi" class="form-label">Dokumen Invensi (Manual
                                    Book/Buku/Dll)</label><br>
                                <?php if(!empty($hk->dokumen_invensi)): ?>
                                    File : <?php echo e(basename($hk->dokumen_invensi)); ?>

                                <?php else: ?>
                                    File : Tidak ada
                                <?php endif; ?>

                                <input type="file" class="form-control " placeholder="" name="dokumen_invensi"
                                    id="invensi">
                                    <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                
                            </div>
                            <div class="mb-3">

                                <label class="form-label" for="surat_pengalihan">Surat Pengalihan Hak
                                    Cipta</label><br>
                                <?php if(!empty($hk->surat_pengalihan)): ?>
                                    File : <?php echo e(basename($hk->surat_pengalihan)); ?>

                                <?php else: ?>
                                    File : Tidak ada
                                <?php endif; ?>
                                <input type="file" class="form-control " placeholder="" name="surat_pengalihan"
                                    id="surat_pengalihan">
                                    <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                
                            </div>
                            <div class="mb-3">

                                <label for="pernyataan" class="form-label">Surat Pernyataan</label><br>
                                <?php if(!empty($hk->surat_pernyataan)): ?>
                                    File : <?php echo e(basename($hk->surat_pernyataan)); ?>

                                <?php else: ?>
                                    File : Tidak ada
                                <?php endif; ?>
                                <input type="file" id="pernyataan" class="form-control " placeholder=""
                                    name="surat_pernyataan">
                                    <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>masukan file jika ada perubahan</span>
                                
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                    class="form-control" value="<?php echo e($hk->tanggal_permohonan); ?>">
                                
                            </div>
                            <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                Isi semua Form Dengan
                                Benar</p>
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
        <script src="<?php echo e(asset('assets-user/js/jquery.min.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </div>
</body>


</html>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/admin/adminhk/edithk/dosen.blade.php ENDPATH**/ ?>