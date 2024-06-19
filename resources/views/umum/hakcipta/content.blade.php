<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}}
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
                                        <h6 class="">Diterima</h6>
                                        <h2 class="mb-0 number-font">{{ $tercatat }}</h2>
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
                                        <h2 class="mb-0 number-font">{{ $tolak }}</h2>
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
                                        <h6 class="">Keterangan Belum Lengkap</h6>
                                        <h2 class="mb-0 number-font">{{ $null }}</h2>
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
                                        <h2 class="mb-0 number-font">{{ $mvdov }}</h2>
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
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/umum/hak-cipta/cari" method="GET">
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
                                            <th scope="col">Status Data Paten</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hc as $i => $p)
                                            <tr>
                                                <th scope="row">{{ $i + 1 }}</th>
                                                <td>{{ $p->nama_lengkap }}</td>
                                                <td>{{ $p->jenis_ciptaan }}</td>
                                                <td>{{ $p->judul_ciptaan }}</td>
                                                <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $p->status }}</td>
                                                <td>
                                                    @if ($p->cekhc?->cek_data == 'Benar')
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    @elseif($p->cekhc?->cek_data == 'Salah')
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    @else
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($p->cekhc?->keterangan == null)
                                                        Data HakCipta Belum Diverifikasi
                                                    @else
                                                        {{ $p->cekhc?->keterangan }}
                                                    @endif
                                                </td>
                                                <td><a href={{ Route('umum.hc.lihat', $p->id) }}
                                                        class="btn btn-info"><i class="fa fa-eye"
                                                            data-bs-toggle="tooltip"></i></a>
                                                    <a href={{ Route('umum.hc.edit', $p->id) }}
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            data-bs-toggle="tooltip"></i></a>
                                                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">
                                                        <i class="fa fa-trash" data-bs-toggle="tooltip"></i>
                                                    </button>
                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                        data-bs-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                        Peringatan</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda yakin akan menghapus pengajuan ini
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <a href={{ Route('umum.hc.hapus', $p->id) }}
                                                                        class="btn btn-danger">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
