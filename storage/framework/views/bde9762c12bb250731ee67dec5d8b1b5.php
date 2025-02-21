<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA-Admin | Paten | Lihat</title>
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
                    <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-person me-3"></i>Data Paten
                        <?php echo e($p->nama_lengkap); ?>

                    </h3>
                    <div class="table-responsive p-3">
                        <table class="table table-borderless rounded">

                            <tr>
                                <th>Nama Lengkap</th>
                                <td>: <?php echo e($p->nama_lengkap); ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: <?php echo e($p->alamat); ?></td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>: <?php echo e($p->no_telepon); ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal lahir</th>
                                <td>: <?php echo e(\Carbon\Carbon::parse($p->tanggal_lahir)->format('d-m-Y')); ?></td>
                            </tr>
                            <tr>
                                <th>KTP</th>
                                <td>: 
                                    <a href="<?php echo e(route('private_paten_admin', ['file' => basename($p->ktp_inventor)])); ?>"
                                        target="_blank">Lihat KTP</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Anggota Inventor</th>
                                <td>:        
                                <?php if($p->data_pengaju2): ?>
                                    <a href="<?php echo e(route('private_paten_admin', ['file' => basename($p->data_pengaju2)])); ?>" target="_blank">Download xlsx Anggota Inventor</a>
                                <?php else: ?>
                                    Tidak ada data untuk diunduh.
                                <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: <?php echo e($p->email); ?></td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan</th>
                                <td>: <?php echo e($p->kewarganegaraan); ?></td>
                            </tr>
                            <tr>
                                <th>Kode Pos</th>
                                <td>: <?php echo e($p->kode_pos); ?></td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>: <?php if($p->jurusan == null): ?>
                                        Bukan Dosen
                                    <?php else: ?>
                                        <?php echo e($p->jurusan); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>prodi</th>
                                <td>: <?php if($p->prodi == null): ?>
                                        Bukan Dosen
                                    <?php else: ?>
                                        <?php echo e($p->prodi); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Jenis Paten</th>
                                <td>: <?php echo e($p->jenis_paten); ?></td>
                            </tr>
                            <tr>
                                <th>Judul Paten</th>
                                <td>: <?php echo e($p->judul_paten); ?></td>
                            </tr>
                            <tr>
                                <th>Abstrak Paten</th>
                                <td>: <a href=<?php echo e(route('public_paten_admin', ['file' => basename($p->abstrak_paten)])); ?> class=""
                                        target="_blank">Lihat Abstrak Paten</a></td>
                            </tr>
                            <tr>
                                <th>Deskripsi Paten</th>
                                <td>: <a href=<?php echo e(route('public_paten_admin', ['file' => basename($p->deskripsi_paten)])); ?> class=""
                                        target="_blank">Lihat Deskripsi Paten</a></td>
                            </tr>
                            <tr>
                                <th>Pengalihan hak invensi</th>
                                <td>: <a href=<?php echo e(route('private_paten_admin', ['file' => basename($p->pengalihan_hak)])); ?> class=""
                                        target="_blank">Lihat Pengalihan Hak Invensi</a></td>
                            </tr>
                            <tr>
                                <th>Klaim</th>
                                <td>: <a href=<?php echo e(route('private_paten_admin', ['file' => basename($p->klaim)])); ?> class="" target="_blank">Lihat
                                        Klaim</a></td>
                            </tr>
                            <tr>
                                <th>Pernyataan Kepemilikan</th>
                                <td>: <a href=<?php echo e(route('private_paten_admin', ['file' => basename($p->pernyataan_kepemilikan)])); ?> class=""
                                        target="_blank">Lihat Pernyataan Kepemilikan</a></td>
                            </tr>
                            <tr>
                                <th>Surat Kuasa</th>
                                <td>: <a href=<?php echo e(route('private_paten_admin', ['file' => basename($p->surat_kuasa)])); ?> class=""
                                        target="_blank">Lihat Surat Kuasa</a></td>
                            </tr>
                            <tr>
                                <th>Gambar Paten</th>
                                <td>: <a href=<?php echo e(route('public_paten_admin', ['file' => basename($p->gambar_paten)])); ?> class=""
                                        target="_blank">Lihat Gambar paten</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Gambar Tampilan</th>
                                <td>: <a href=<?php echo e(route('public_paten_admin', ['file' => basename($p->gambar_tampilan)])); ?> class=""
                                    target="_blank">Lihat Gambar tampilan</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal pengajuan</th>
                                <td>: <?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y')); ?></td>
                            </tr>
                            <tr>
                                <th>Sertifikat Paten</th>
                                <td>: <?php if($p->sertifikat_paten != ''): ?>
                                        <a href=<?php echo e(route('public_paten_admin', ['file' => basename($p->sertifikat_paten)])); ?> class=""
                                            target="_blank">Lihat sertifikat</a>
                                    <?php else: ?>
                                        Paten Ini Belum Mendapatkan Sertifikat
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Status Paten</th>
                                <td>: <?php echo e($p->status); ?></td>
                            </tr>
                            <tr>
                                <th>
                                    Keterangan Status Cek Paten
                                </th>
                                <td>:
                                    <?php if($p->cek?->keterangan == ''): ?>
                                        Data Paten Belum Dicek
                                    <?php else: ?>
                                        <?php echo e($p->cek?->keterangan); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
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
</body>

</html>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/admin/adminpaten/showpaten/index.blade.php ENDPATH**/ ?>