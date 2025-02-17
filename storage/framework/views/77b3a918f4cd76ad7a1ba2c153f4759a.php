<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item active" aria-current="page">Desain Industri</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Diterima</h6>
                                        <h2 class="mb-0 number-font"><?php echo e($desainDi); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Ditolak</h6>
                                        <h2 class="mb-0 number-font"><?php echo e($desainDK); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Pemeriksaan Formalitas</h6>
                                        <h2 class="mb-0 number-font"><?php echo e($desainP); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Menunggu Verifikasi Data Oleh Verifikator</h6>
                                        <h2 class="mb-0 number-font"><?php echo e($mvdov); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain Industri</h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-hover p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Jenis ciptaan</th>
                                            <th scope="col">Judul ciptaan</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status Desain Industri</th>
                                            <th scope="col">Status Data Desain Industri</th>
                                            <th scope="col">keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $di; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e(($di->currentPage() - 1) * $di->perPage() + $loop->iteration); ?></th>
                                                <td><?php echo e($d->nama_lengkap); ?></td>
                                                <td><?php echo e($d->jenis_di); ?></td>
                                                <td><?php echo e($d->judul_di); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($d->tanggal_permohonan)->format('d-m-Y ')); ?></td>
                                                <td><?php echo e($d->status); ?></td>
                                                <td>
                                                    <?php if($d->cekDi?->cek_data == 'Valid'): ?>
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php elseif($d->cekDi?->cek_data == 'Tidak Valid'): ?>
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php else: ?>
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($d->cekDi?->keterangan == ''): ?>
                                                        Data Desain Industri Belum Diverifikasi
                                                    <?php else: ?>
                                                        <?php echo e($d->cekDi?->keterangan); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><a href=<?php echo e(Route('dsn.di.lihat', $d->id)); ?>

                                                        class="btn btn-info"><i class="fa fa-eye" data-bs-toggle="tooltip"></i></a>
                                                    <a href=<?php echo e(Route('dsn.edit.di', $d->id)); ?>

                                                        class="btn btn-warning"><i class="fa fa-pencil" data-bs-toggle="tooltip"></i></a>
                                                    
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($di->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/desainindustri/content.blade.php ENDPATH**/ ?>