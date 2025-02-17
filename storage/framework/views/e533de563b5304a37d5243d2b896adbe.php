<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dosen/paten">Paten</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Hak
                                Cipta
                                <?php echo e($hc->nama_lengkap); ?>

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
                                        <td>: <?php echo e($hc->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: <?php echo e($hc->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>: <?php echo e($hc->no_telepon); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($hc->tanggal_lahir)->format('d-m-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>:
                                            <?php if(!empty($hc->ktp_inventor)): ?>
                                                <a href="<?php echo e(route('private_hc_verifikator', ['file' => basename($hc->ktp_inventor)])); ?>"
                                                    target="_blank">
                                                    Lihat KTP
                                                </a>
                                            <?php else: ?>
                                                KTP tidak tersedia.
                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>:
                                            <?php if($hc->data_pengaju2): ?>
                                                <a href="<?php echo e(route('private_hc_verifikator', ['file' => basename($hc->data_pengaju2)])); ?>"
                                                    target="_blank">Download xlsx Anggota Inventor</a>
                                            <?php else: ?>
                                                Tidak ada data untuk diunduh.
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: <?php echo e($hc->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td>: <?php echo e($hc->kewarganegaraan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>: <?php echo e($hc->kode_pos); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan</th>
                                        <td>: <?php if($hc->jurusan == null): ?>
                                                Bukan Dosen
                                            <?php else: ?>
                                                <?php echo e($hc->jurusan); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Prodi</th>
                                        <td>: <?php if($hc->prodi == null): ?>
                                                Bukan Dosen
                                            <?php else: ?>
                                                <?php echo e($hc->prodi); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Ciptaann</th>
                                        <td>: <?php echo e($hc->jenis_ciptaan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Judul Ciptaan</th>
                                        <td>: <?php echo e($hc->judul_ciptaan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Abstrak Ciptaan</th>
                                        <td>: <?php echo e($hc->uraian_singkat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dokumen Invensi</th>
                                        <td>:
                                            <a href="<?php echo e(route('public_hc_verifikator', ['file' => basename($hc->dokumen_invensi)])); ?>"
                                                target="_blank">Lihat Dokumen Invensi
                                            </a>
                                    </tr>
                                    <tr>
                                        <th>Surat Pengalihan Hak Cipta</th>
                                        <td>: 
                                            <a href="<?php echo e(route('private_hc_verifikator', ['file' => basename($hc->surat_pengalihan)])); ?>"
                                                    target="_blank">Lihat Surat Pengalihan Hak Cipta
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Surat Pernyataan</th>
                                        <td>: <a href="<?php echo e(route('private_hc_verifikator', ['file' => basename($hc->surat_pernyataan)])); ?>"
                                                target="_blank">Lihat Surat Pernyataan</a></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($hc->tanggal_permohonan)->format('d-m-Y ')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: <?php echo e($hc->status); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikat Hak Cipta</th>
                                        <td>: <?php if($hc->sertifikat_hakcipta != ''): ?>
                                                
                                                    <a href="<?php echo e(route('public_hc_verifikator', parameters: ['file' => basename($hc->sertifikat_hakcipta)])); ?>"
                                                        target="_blank">Lihat sertifikat
                                                    </a>
                                            <?php else: ?>
                                                Hak Cipta Ini Belum Mendapatkan Sertifikat
                                            <?php endif; ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan status data hak cipta</th>
                                        <td>
                                            : <?php if($hc->cekHc?->keterangan == ''): ?>
                                                Data Hak Cipta Belum Dicek
                                            <?php else: ?>
                                                <?php echo e($hc->cekHc?->keterangan); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                
                                <div class="mb-3">
                                    <?php if($check): ?>
                                        <!-- Data paten sudah dinilai -->
                                        <!-- Tombol "Nilai Data paten" dinonaktifkan -->
                                        <a class="btn btn-primary me-3 disabled" aria-disabled="true" title="Data paten sudah dinilai. Gunakan Update">
                                            Nilai Data Hak Cipta
                                        </a>
                                        <!-- Tombol "Update nilai Data paten" aktif -->
                                        <a href="/verifikator/cek/hak-cipta/nilai/update/<?php echo e($hc->id); ?>" class="btn btn-outline-secondary">
                                            Update nilai Data Hak Cipta
                                        </a>
                                    <?php else: ?>
                                        <!-- Data hc belum dinilai -->
                                        <!-- Tombol "Nilai Data hc" aktif -->
                                        <a href="/verifikator/cek/hak-cipta/nilai/<?php echo e($hc->id); ?>" class="btn btn-primary me-3">
                                            Nilai Data Hak Cipta
                                        </a>
                                        <!-- Tombol "Update nilai Data Hak Cipta" dinonaktifkan -->
                                        <a class="btn btn-outline-secondary disabled" aria-disabled="true" title="Data Hak Cipta belum dinilai. Silahkan nilai terlebih dahulu">
                                            Update nilai Data Hak Cipta
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekhc/lihat/content.blade.php ENDPATH**/ ?>