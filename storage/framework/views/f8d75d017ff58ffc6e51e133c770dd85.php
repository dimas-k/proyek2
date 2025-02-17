<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/umum/desain-industri">Desain industri</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain Industri
                                <?php echo e($di->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless p-1">

                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>: <?php echo e($di->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: <?php echo e($di->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>: <?php echo e($di->no_telepon); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($di->tanggal_lahir)->format('d-m-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>: <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->ktp_inventor)])); ?>"
                                                target="_blank">Lihat KTP</a></td>
                                    </tr>
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>:        
                                        <?php if($di->data_pengaju2): ?>
                                            <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->data_pengaju2)])); ?>" target="_blank">Download xlsx Anggota Inventor</a>
                                        <?php else: ?>
                                            Tidak ada data untuk diunduh.
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: <?php echo e($di->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td>: <?php echo e($di->kewarganegaraan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>: <?php echo e($di->kode_pos); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Disain Industri</th>
                                        <td>: <?php echo e($di->jenis_di); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Judul Desain Industri</th>
                                        <td>: <?php echo e($di->judul_di); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gambar desain Industri</th>
                                        <td >: <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->gambar_di)])); ?> "
                                            target="_blank">Lihat Gambar Desain Industri</a></td>
                                    </tr>
                                    <tr>
                                        <th>Uraian Desain Industri</th>
                                        <td>: <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->uraian_di)])); ?>"
                                                target="_blank">Lihat Uraian Desain Industri</a></td>
                                    </tr>
                                    <tr>
                                        <th>Surat Kepemilikan</th>
                                        <td>: <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->surat_kepemilikan)])); ?>"
                                                target="_blank">Lihat Surat Kepemilikan</a></td>
                                    </tr>
                                    <tr>
                                        <th>Surat Pengalihan hak</th>
                                        <td>: <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->surat_pengalihan)])); ?>"
                                                target="_blank">Lihat Surat Pengalihan Hak</a></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($di->tanggal_permohonan)->format('d-m-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: <?php echo e($di->status); ?></td>
                                    </tr>
                                    <tr>
                                        <th>status data desain industri</th>
                                        <td>: <?php if($di->cekDi?->keterangan == null): ?>
                                            Data Desain Industri Belum Diverifikasi
                                        <?php else: ?>
                                            <?php echo e($di->cekDi?->keterangan); ?>

                                        <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikat Desain Industri</th>
                                        <td>: <?php if($di->sertifikat_desain != ""): ?>
                                                <a href="<?php echo e(route('private_di_umum', ['file' => basename($di->sertifikat_desain)])); ?>""
                                                    class="" target="_blank">Lihat sertifikat</a>
                                            <?php else: ?> 
                                            Desain Industri Anda Belum Mendapatkan Sertifikat    
                                            <?php endif; ?>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum/desainindustri/lihat/content.blade.php ENDPATH**/ ?>