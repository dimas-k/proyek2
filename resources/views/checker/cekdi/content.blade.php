<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Desain Industri</li>
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
                            </h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session()->has('warning'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('warning') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/verifikator/cek/desain-industri/cari" method="GET">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">Cari Desain Industri</label>
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
                                            <th scope="col">Jenis Desain</th>
                                            <th scope="col">Judul Desain</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status Desain Industri</th>
                                            <th scope="col">Status Cek Data</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($di as $i => $p)
                                            <tr>
                                                <th scope="row">{{ $i + 1 }}</th>
                                                <td>{{ $p->nama_lengkap }}</td>
                                                <td>{{ $p->jenis_di }}</td>
                                                <td>{{ $p->judul_di }}</td>
                                                <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ') }}
                                                </td>
                                                <td>{{ $p->status }}</td>
                                                <td>
                                                    @if ($p->cekDi?->cek_data == 'Valid')
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    @elseif($p->cekDi?->cek_data == 'Tidak Valid')
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    @else
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($p->cekDi?->keterangan == null)
                                                        Data Desain Industri Belum Diverifikasi
                                                    @else
                                                        {{ $p->cekDi?->keterangan }}
                                                    @endif
                                                </td>
                                                <td><a href={{ Route('lihat.desain', $p->id) }}
                                                        class="btn btn-info">Lihat</a>
                                                    {{-- <a href={{ Route('dsn.edit.paten', $p->id) }}
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            data-bs-toggle="tooltip"></i></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $di->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- ROW-2 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
