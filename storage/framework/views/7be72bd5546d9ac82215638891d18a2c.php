<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Paten</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/checker/cek/paten">Paten</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Paten
                                <?php echo e($paten->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('warning')): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo e(session('warning')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-borderless p-1">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>: <?php echo e($paten->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: <?php echo e($paten->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>: <?php echo e($paten->no_telepon); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($paten->tanggal_lahir)->format('d-m-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>:
                                            <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->ktp_inventor)])); ?>" target="_blank">Lihat KTP</a>
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>:
                                            <?php if($paten->data_pengaju2): ?>
                                                <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->data_pengaju2)])); ?>"
                                                    target="_blank">Download xlsx Anggota Inventor</a>
                                            <?php else: ?>
                                                Tidak ada data untuk diunduh.
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: <?php echo e($paten->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td>: <?php echo e($paten->kewarganegaraan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>: <?php echo e($paten->kode_pos); ?></td>
                                    </tr>
                                    <tr>
                                        <th>jurusan</th>
                                        <td>: <?php echo e($paten->jurusan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>prodi</th>
                                        <td>: <?php echo e($paten->prodi); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Paten</th>
                                        <td>: <?php echo e($paten->jenis_paten); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Judul Paten</th>
                                        <td>: <?php echo e($paten->judul_paten); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Abstrak Paten</th>
                                        <td>: 
                                            <a href="<?php echo e(route('public_paten_verifikator', ['file' => basename($paten->abstrak_paten)])); ?>" target="_blank">Lihat Abstrak Paten</a></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi Paten</th>
                                        <td>:
                                            <a href="<?php echo e(route('public_paten_verifikator', ['file' => basename($paten->deskripsi_paten)])); ?>" target="_blank">Lihat Deskripsi Paten</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pengalihan hak invensi</th>
                                        <td>:
                                            <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->pengalihan_hak)])); ?>" target="_blank">Lihat Pengalihan Hak Invensi</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Klaim</th>
                                        <td>:
              
                                            <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->klaim)])); ?>" target="_blank">Lihat Klaim</a>
                                        </td>
                                            
                                    </tr>
                                    <tr>
                                        <th>Pernyataan Kepemilikan</th>
                                        <td>: 
                                            <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->pernyataan_kepemilikan)])); ?>" target="_blank">Lihat Pernyataan Kepemilikan</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Surat Kuasa</th>
                                        <td>: 
                                            <a href="<?php echo e(route('private_paten_verifikator', ['file' => basename($paten->surat_kuasa)])); ?>" target="_blank">Lihat Surat Kuasa</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Gambar Paten</th>
                                        <td>:
                                            <a href="<?php echo e(route('public_paten_verifikator', ['file' => basename($paten->gambar_paten)])); ?>" target="_blank">Lihat Gambar paten</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Gambar Tampilan</th>
                                        <td>:
                                            <a href="<?php echo e(route('public_paten_verifikator', ['file' => basename($paten->gambar_tampilan)])); ?>" target="_blank">Lihat Gambar Tampilan</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($paten->tanggal_permohonan)->format('d-m-Y')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status Paten</th>
                                        <td>: <?php echo e($paten->status); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan data paten</th>
                                        <td>:
                                            <?php if($paten->cek?->keterangan == null): ?>
                                                Data Paten Belum Diverifikasi
                                            <?php else: ?>
                                                <?php echo e($paten->cek?->keterangan); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikat Paten</th>
                                        <td>:
                                            <?php if($paten->sertifikat_paten == ''): ?>
                                                Paten Anda Belum Memiliki Sertifikat
                                            <?php else: ?>
                                                <a href="<?php echo e(route('public_paten_verifikator', ['file' => basename($paten->sertifikat_paten)])); ?>" target="_blank">Lihat sertifikat</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                <div class="mb-3">
                                    <?php if($check): ?>
                                        <!-- Data paten sudah dinilai -->
                                        <!-- Tombol "Nilai Data Paten" dinonaktifkan -->
                                        <a class="btn btn-primary me-3 disabled" aria-disabled="true" title="Data Paten sudah dinilai. Gunakan Update">
                                            Nilai Data Paten
                                        </a>
                                        <!-- Tombol "Update nilai Data Paten" aktif -->
                                        <a href="/verifikator/cek/paten/nilai/update/<?php echo e($paten->id); ?>" class="btn btn-outline-secondary">
                                            Update nilai Data Paten
                                        </a>
                                    <?php else: ?>
                                        <!-- Data paten belum dinilai -->
                                        <!-- Tombol "Nilai Data Paten" aktif -->
                                        <a href="/verifikator/cek/paten/nilai/<?php echo e($paten->id); ?>" class="btn btn-primary me-3">
                                            Nilai Data Paten
                                        </a>
                                        <!-- Tombol "Update nilai Data Paten" dinonaktifkan -->
                                        <a class="btn btn-outline-secondary disabled" aria-disabled="true" title="Data Paten belum dinilai. Silahkan nilai terlebih dahulu">
                                            Update nilai Data Paten
                                        </a>
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekpaten/lihat/content.blade.php ENDPATH**/ ?>