<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Paten</h1>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Paten
                                {{ $paten->nama_lengkap }}
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless p-1">

                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>: {{ $paten->nama_lengkap }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{ $paten->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>: {{ $paten->no_telepon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal lahir</th>
                                        <td>: {{ \Carbon\Carbon::parse($paten->tanggal_lahir)->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>:
                                            <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->ktp_inventor)]) }}"
                                                target="_blank">Lihat KTP</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Anggota Inventor</th>
                                        <td>:
                                            @if ($paten->data_pengaju2)
                                                <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->data_pengaju2)]) }}"
                                                    target="_blank">Download xlsx Anggota Inventor</a>
                                            @else
                                                Tidak ada data untuk diunduh.
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: {{ $paten->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td>: {{ $paten->kewarganegaraan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>: {{ $paten->kode_pos }}</td>
                                    </tr>
                                    <tr>
                                        <th>jurusan</th>
                                        <td>: {{ $paten->jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <th>prodi</th>
                                        <td>: {{ $paten->prodi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Paten</th>
                                        <td>: {{ $paten->jenis_paten }}</td>
                                    </tr>
                                    <tr>
                                        <th>Judul Paten</th>
                                        <td>: {{ $paten->judul_paten }}</td>
                                    </tr>
                                    <tr>
                                        <th>Abstrak Paten</th>
                                        <td>: 
                                            {{-- <a href="{{ Storage::url('dokumen-paten/' . basename($paten->abstrak_paten))  }}"
                                                target="_blank">Lihat Abstrak Paten</a> --}}
                                            <a href="{{ route('public_paten_dosen', ['filename' => basename($paten->abstrak_paten)]) }}"
                                                target="_blank">Lihat Abstrak Paten</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi Paten</th>
                                        <td>: 
                                            {{-- <a href="{{ Storage::url('dokumen-paten/' . basename($paten->deskripsi_paten))  }}" 
                                                target="_blank">Lihat Deskripsi Paten</a> --}}
                                            <a href="{{ route('public_paten_dosen', ['filename' => basename($paten->deskripsi_paten)]) }}" 
                                                target="_blank">Lihat Deskripsi Paten</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pengalihan hak invensi</th>
                                        <td>: <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->pengalihan_hak)])  }}"
                                                target="_blank">Lihat Pengalihan Hak Invensi</a></td>
                                    </tr>
                                    <tr>
                                        <th>Klaim</th>
                                        <td>: <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->klaim)])  }}"
                                                target="_blank">Lihat Klaim</a></td>
                                    </tr>
                                    <tr>
                                        <th>Pernyataan Kepemilikan</th>
                                        <td>: <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->pernyataan_kepemilikan)])  }}"
                                                 target="_blank">Lihat Pernyataan Kepemilikan</a></td>
                                    </tr>
                                    <tr>
                                        <th>Surat Kuasa</th>
                                        <td>: <a href="{{ route('private_paten_dosen', ['filename' => basename($paten->surat_kuasa)])  }}"
                                                target="_blank">Lihat Surat Kuasa</a></td>
                                    </tr>
                                    <tr>
                                        <th>Gambar Paten</th>
                                        <td>: 
                                            {{-- <a href="{{ Storage::url('dokumen-paten/' . basename($paten->gambar_paten)) }}"
                                                target="_blank">Lihat Gambar Paten</a> --}}
                                            <a href="{{ route('public_paten_dosen', ['filename' => basename($paten->gambar_paten)]) }}"
                                                target="_blank">Lihat Gambar Paten</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Gambar Tampilan</th>
                                        <td>: 
                                            {{-- <a href="{{ Storage::url('dokumen-paten/' . basename($paten->gambar_tampilan))  }}"
                                                target="_blank">Lihat Gambar Tampilan</a> --}}
                                            <a href="{{ route('public_paten_dosen', ['filename' => basename($paten->gambar_tampilan)]) }}"
                                                target="_blank">Lihat Gambar Tampilan</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>: {{ \Carbon\Carbon::parse($paten->tanggal_permohonan)->format('d-m-Y') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status Paten</th>
                                        <td>: {{ $paten->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan data paten</th>
                                        <td>: @if ($paten->cek?->keterangan == null)
                                                Data Paten Belum Diverifikasi
                                            @else
                                                {{ $paten->cek?->keterangan }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sertifikat Paten</th>
                                        <td>: @if ($paten->sertifikat_paten == '')
                                                Paten Anda Belum Memiliki Sertifikat
                                            @else
                                                <a href="{{ route('public_paten_dosen', ['filename' => basename($paten->sertifikat_paten)])  }}"
                                                     target="_blank">Lihat sertifikat</a>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
</div>
