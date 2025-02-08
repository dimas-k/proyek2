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
                                        <td>: <a href=<?php echo e(asset('storage/' . $hc->ktp_inventor)); ?> class=""
                                                target="_blank">Lihat KTP</a></td>
                                    </tr>
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>: <a href=<?php echo e(asset('storage/' . $hc->data_pengaju2)); ?> class=""
                                                target="_blank">Download xlsx Anggota Inventor</a></td>
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
                                        <th>Dokumen invensi</th>
                                        <td>: <a href=<?php echo e(asset('storage/' . $hc->dokumen_invensi)); ?> class=""
                                                target="_blank">Lihat Dokumen Invensi</a></td>
                                    </tr>
                                    <tr>
                                        <th>Pengalihan hak invensi</th>
                                        <td>: <a href=<?php echo e(asset('storage/' . $hc->surat_pengalihan)); ?> class=""
                                                target="_blank">Lihat Pengalihan Hak Invensi</a></td>
                                    </tr>
                                    <tr>
                                        <th>surat pernyataan</th>
                                        <td>: <a href=<?php echo e(asset('storage/' . $hc->surat_pernyataan)); ?> class=""
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
                                                <a href=<?php echo e(asset('storage/' . $hc->sertifikat_hakcipta)); ?>

                                                    class="" target="_blank">Lihat sertifikat</a>
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
                                <a class="btn btn-primary me-3"
                                    href="/verifikator/cek/hak-cipta/nilai/<?php echo e(request()->segment(5)); ?>">Nilai Data Hak Cipta</a>
                                
                                <a href="/verifikator/cek/hak-cipta/nilai/update/<?php echo e(request()->segment(5)); ?>" class="btn btn-outline-secondary">Update nilai Data hak Cipta</a>
                            </div>
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekhc/lihat/content.blade.php ENDPATH**/ ?>