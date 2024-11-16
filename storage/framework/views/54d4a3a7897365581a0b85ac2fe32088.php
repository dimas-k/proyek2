<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item active" aria-current="page">Hak Cipta</li>
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
                                        <h6 class="">Tercatat</h6>
                                        <h2 class="mb-0 number-font"><?php echo e($tercatat); ?></h2>
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
                                        <h2 class="mb-0 number-font"><?php echo e($tolak); ?></h2>
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
                                        <h2 class="mb-0 number-font"><?php echo e($null); ?></h2>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Hak
                                Cipta
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
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/hak-cipta/cari" method="GET">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">Cari Hak Cipta</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="" class="form-control"
                                                aria-describedby="" name="cari">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary ">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Jenis ciptaan</th>
                                            <th scope="col">Judul ciptaan</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status Hak Cipta</th>
                                            <th scope="col">Status Data Hak Cipta</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $hc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo e(($hc->currentPage() - 1) * $hc->perPage() + $loop->iteration); ?>

                                                </th>
                                                <td><?php echo e($p->nama_lengkap); ?></td>
                                                <td><?php echo e($p->jenis_ciptaan); ?></td>
                                                <td><?php echo e($p->judul_ciptaan); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y')); ?>

                                                </td>
                                                <td><?php echo e($p->status); ?></td>
                                                <td>
                                                    <?php if($p->cekhc?->cek_data == 'Valid'): ?>
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php elseif($p->cekhc?->cek_data == 'Tidak Valid'): ?>
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php else: ?>
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($p->cekhc?->keterangan == ''): ?>
                                                        Data Hak Cipta Belum Diverifikasi
                                                    <?php else: ?>
                                                        <?php echo e($p->cekhc?->keterangan); ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td><a href=<?php echo e(Route('dsn.lihat.hc', $p->id)); ?> class="btn btn-info"><i
                                                            class="fa fa-eye" data-bs-toggle="tooltip"></i></a>
                                                    <a href=<?php echo e(Route('dsn.edit.hc', $p->id)); ?>

                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            data-bs-toggle="tooltip"></i></a>
                                                    
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($hc->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/hakcipta/content.blade.php ENDPATH**/ ?>