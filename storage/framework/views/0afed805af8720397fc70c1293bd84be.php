<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/verifikator/cek/desain-industri">Desain Industri</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain
                                Industri
                                <?php echo e($di->nama_lengkap); ?>

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
                                        <td>: <a href=<?php echo e(route('private_di_verifikator', ['file' => basename($di->ktp_inventor)])); ?>

                                                class="" target="_blank">Lihat KTP</a></td>
                                    </tr>
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>:
                                            <?php if($di->data_pengaju2): ?>
                                                <a href="<?php echo e(route('private_di_verifikator', ['file' => basename($di->data_pengaju2)])); ?>"
                                                    target="_blank">Download xlsx Anggota Inventor</a>
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
                                        <th>Jurusan</th>
                                        <td>: <?php if($di->jurusan == null): ?>
                                                Bukan Dosen
                                            <?php else: ?>
                                                <?php echo e($di->jurusan); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Prodi</th>
                                        <td>: <?php if($di->prodi == null): ?>
                                                Bukan Dosen
                                            <?php else: ?>
                                                <?php echo e($di->prodi); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Desain</th>
                                        <td>: <?php echo e($di->jenis_di); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Judul Desain</th>
                                        <td>: <?php echo e($di->judul_di); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Uraian Desain Industri</th>
                                        <td>: <a href=<?php echo e(route('private_di_verifikator', ['file' => basename($di->uraian_di)])); ?>

                                                class="" target="_blank">Lihat Uraian Desain Industri</a></td>
                                    </tr>
                                    <tr>
                                        <th>Gambar desain Industri</th>
                                        <td>: <a href=<?php echo e(route('private_di_verifikator', ['file' => basename($di->gambar_di)])); ?>

                                                class="" target="_blank">Lihat Gambar Desain Industri</a></td>
                                    </tr>
                                    <tr>
                                        <th>surat Kepemilikan</th>
                                        <td>: <a href=<?php echo e(route('private_di_verifikator', ['file' => basename($di->surat_kepemilikan)])); ?>

                                                class="" target="_blank">Lihat Surat Kepemilikan</a></td>
                                    </tr>
                                    <tr>
                                        <th>Surat Pengalihan Hak</th>
                                        <td>: <a href=<?php echo e(route('private_di_verifikator', ['file' => basename($di->surat_pengalihan)])); ?>

                                                class="" target="_blank">Lihat Surat Pengalihan Hak</a></td>
                                    </tr>

                                    <tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>: <?php echo e(\Carbon\Carbon::parse($di->tanggal_permohonan)->format('d-m-Y ')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: <?php echo e($di->status); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikat Desain Industri</th>
                                        <td>: <?php if($di->sertifikat_desain != ''): ?>
                                                <a href=<?php echo e(asset('storage/' . $di->sertifikat_desain)); ?> class=""
                                                    target="_blank">Lihat sertifikat</a>
                                            <?php else: ?>
                                                Desain Industri Ini Belum Mendapatkan Sertifikat
                                            <?php endif; ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan Status Data Desain Industri</th>
                                        <td>
                                            : <?php if($di->cekDi?->keterangan == null): ?>
                                                Data Desain Industri Belum Diverifikasi
                                            <?php else: ?>
                                                <?php echo e($di->cekDi?->keterangan); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                                

                                <div class="mb-3">
                                    <?php if($check): ?>
                                        <!-- Data Desain Industri sudah dinilai -->
                                        <!-- Tombol "Nilai Data Desain Industri" dinonaktifkan -->
                                        <a class="btn btn-primary me-3 disabled" aria-disabled="true"
                                            title="Data Desain Industri sudah dinilai. Gunakan Update">
                                            Nilai Data Desain Industri
                                        </a>
                                        <!-- Tombol "Update nilai Data Desain Industri" aktif -->
                                        <a href="/verifikator/cek/desain-industri/nilai/update/<?php echo e($di->id); ?>"
                                            class="btn btn-outline-secondary">
                                            Update nilai Data Desain Industri
                                        </a>
                                    <?php else: ?>
                                        <!-- Data hc belum dinilai -->
                                        <!-- Tombol "Nilai Data hc" aktif -->
                                        <a href="/verifikator/cek/desain-industri/nilai/<?php echo e($di->id); ?>"
                                            class="btn btn-primary me-3">
                                            Nilai Data Desain Industri
                                        </a>
                                        <!-- Tombol "Update nilai Data Hak Cipta" dinonaktifkan -->
                                        <a class="btn btn-outline-secondary disabled" aria-disabled="true"
                                            title="Data Hak Cipta belum dinilai. Silahkan nilai terlebih dahulu">
                                            Update nilai Data Desain Industri
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekdi/lihat/content.blade.php ENDPATH**/ ?>