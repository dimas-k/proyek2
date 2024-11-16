<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Pengajuan Paten</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/umum/paten">Paten</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-wpforms me-2" data-bs-toggle="tooltip"></i>Formulir
                                Pengajuan Paten
                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <span class="d-flex justify-content-end">
                                <a href="https://drive.google.com/drive/folders/1-7Cop9aiCcB8FOl93FAluVu4FpSXONNl?usp=drive_link"
                                    target="_blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-bolder"><b><i
                                            class="bi bi-download me-1"></i></b>Berkas Yang Di
                                    Perlukan
                                </a>
                            </span>
                            <form class="p-2" enctype="multipart/form-data" method="post"
                                action="/umum/pengajuan/paten/simpan" id="uploadForm">
                                <?php echo csrf_field(); ?>
                                <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                                <div class="container">
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" value="<?php echo e(auth()->user()->nama_lengkap); ?>"
                                            class="form-control"
                                            id="nama_lengkap" placeholder="Masukkan Nama"name="nama_lengkap">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control"
                                            id="alamat" placeholder="Masukkan Alamat" name="alamat"
                                            value="<?php echo e(auth()->user()->alamat); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telepon" class="form-label">No telepon</label>
                                        <input type="number"
                                            class="form-control "
                                            id="no_telepon" placeholder="Masukkan No telepon" name="no_telepon"
                                            value="<?php echo e(auth()->user()->no_telepon); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="form-control" value="<?php echo e(old('tanggal_lahir')); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">KTP Inventor</label>
                                        <input type="file"
                                            class="form-control"
                                            id="ktp" name="ktp_inventor">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control "
                                            id="email" placeholder="Masukkan Email" name="email"
                                            value="<?php echo e(auth()->user()->email); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="warga" class="form-label">Kewarganegaraan</label>
                                        <input type="text"
                                            class="form-control"
                                            id="warga" placeholder="Masukkan Kewarganegaraan"
                                            name="kewarganegaraan" value="<?php echo e(old('kewarganegaraan')); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="pos" class="form-label">Kode Pos</label>
                                        <input type="number"
                                            class="form-control"
                                            id="pos" placeholder="Masukkan Kode Pos" name="kode_pos" value="<?php echo e(old('kode_pos')); ?>">
                                        
                                    </div>
                                    <input type="text" class="form-control <?php $__errorArgs = ['institusi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="" value="Umum" name="institusi" hidden>
                                </div>
                                <br><br>
                                <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR PATEN</p>
                                <div class="container">
                                    <label for="paten" class="form-label">Jenis Paten</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_paten"
                                            id="paten" value="Paten">
                                        <label class="form-check-label" for="Paten">
                                            Paten
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_paten"
                                            id="paten_s" value="Paten Sederhana">
                                        <label class="form-check-label" for="Paten sederhana" for="paten_s">
                                            Paten Sederhana
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="judul_paten" class="form-label">Judul Paten</label>
                                        <input type="text"
                                            class="form-control"
                                            id="judul_paten" placeholder="Masukkan Judul Paten" name="judul_paten" value="<?php echo e(old('judul_paten')); ?>">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="abstrak" class="form-label">Abstrak Paten</label>
                                        <input type="file"
                                            class="form-control"
                                            id="abstrak" placeholder="" name="abstrak_paten">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi Paten</label>
                                        <input type="file"
                                            class="form-control "
                                            id="deskripsi" placeholder="" name="deskripsi_paten">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengalihan_hak" class="form-label">Pengalihan Hak Invensi</label>
                                        <input type="file"
                                            class="form-control "
                                            id="pengalihan_hak" placeholder="" name="pengalihan_hak">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="klaim" class="form-label">Klaim</label>
                                        <input type="file"
                                            class="form-control "
                                            id="klaim" placeholder="" name="klaim">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="kepemilikan" class="form-label">Pernyataan kepemikikan
                                            Inventor</label>
                                        <input type="file"
                                            class="form-control"
                                            id="kepemilikan" placeholder="" name="pernyataan_kepemilikan">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="kuasa" class="form-label">Surat kuasa</label>
                                        <input type="file"
                                            class="form-control "
                                            id="kuasa" placeholder="" name="surat_kuasa">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="g_paten" class="form-label">gambar Paten</label>
                                        <input type="file"
                                            class="form-control "
                                            id="g_paten" placeholder="" name="gambar_paten">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="g_tampilan" class="form-label">gambar Tampilan</label>
                                        <input type="file"
                                            class="form-control "
                                            id="g_tampilan" placeholder="" name="gambar_tampilan">
                                        <span class="text-danger"><i class="fa fa-warning me-2"
                                                data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                            dari 10mb</span>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                        <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                            class="form-control " value="<?php echo e(old('tanggal_permohonan')); ?>">
                                        
                                    </div>
                                    <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                        Isi semua Form Dengan
                                        Benar</p>
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Simpan
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static"
                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <!-- COL END -->
                
                <!-- COL END -->
            </div>
            <!-- ROW-2 END -->

            <!-- ROW-4 -->
            
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum/paten/pengajuan/content.blade.php ENDPATH**/ ?>