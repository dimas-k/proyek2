<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use App\Models\HakCipta;
use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use Illuminate\Routing\Controller;

class HakCiptaController extends Controller
{
    public function index()
    {
        $itung = HakCipta::all()->count();
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $hc = HakCipta::latest()->paginate(5);

        $hcTolak = HakCipta::where('status', 'Ditolak')->count();
        $hcTerima = HakCipta::where('status', 'Tercatat')->count();
        $hcKet = HakCipta::where('status', 'Keterangan belum lengkap')->count();
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        $paten2020 = Paten::whereYear('tanggal_permohonan','2020')->count();
        $hc2020 = HakCipta::whereYear('tanggal_permohonan','2020')->count();
        $di2020 = DesainIndustri::whereYear('tanggal_permohonan','2020')->count();
        $gabungKi2020 = $paten2020 + $di2020 + $hc2020 ;

        $paten2021 = Paten::whereYear('tanggal_permohonan','2021')->count();
        $hc2021 = HakCipta::whereYear('tanggal_permohonan','2021')->count();
        $di2021 = DesainIndustri::whereYear('tanggal_permohonan','2021')->count();
        $gabungKi2021 = $paten2021 + $di2021 + $hc2021 ;

        $paten2022 = Paten::whereYear('tanggal_permohonan','2022')->count();
        $hc2022 = HakCipta::whereYear('tanggal_permohonan','2022')->count();
        $di2022 = DesainIndustri::whereYear('tanggal_permohonan','2022')->count();
        $gabungKi2022 = $paten2022 + $di2022 + $hc2022 ;

        $paten2023 = Paten::whereYear('tanggal_permohonan','2023')->count();
        $hc2023 = HakCipta::whereYear('tanggal_permohonan','2023')->count();
        $di2023 = DesainIndustri::whereYear('tanggal_permohonan','2023')->count();
        $gabungKi2023 = $paten2023 + $di2023 + $hc2023 ;

        $paten2024 = Paten::whereYear('tanggal_permohonan','2024')->count();
        $hc2024 = HakCipta::whereYear('tanggal_permohonan','2024')->count();
        $di2024 = DesainIndustri::whereYear('tanggal_permohonan','2024')->count();
        $gabungKi2024 = $paten2024 + $di2024 + $hc2024 ;

        
        return view('umum-page.Hakcipta.index', compact('hc','tercatat','null','tolak','itung','hcTolak','hcTerima','hcKet','hc2020','hc2021','hc2022','hc2023','hc2024','gabungKi2020','gabungKi2021','gabungKi2022','gabungKi2023','gabungKi2024','mvdov'));
    }
    public function cari(Request $request){
        $carijudul = $request->input('cari_hc');
        $carinama = $request->input('cari_nama');
        // $hc = HakCipta::where('judul_ciptaan','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5);
        $hc = HakCipta::when($carijudul, function ($query, $carijudul) {
            return $query->where('judul_ciptaan', 'LIKE', "%" . $carijudul . "%");
        })
        ->when($carinama, function ($query, $carinama) {
            return $query->orWhere('nama_lengkap', 'LIKE', "%" . $carinama . "%");
        })
        ->paginate(5);
        $itung = HakCipta::all()->count();
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        $hcTolak = HakCipta::where('status', 'Ditolak')->count();
        $hcTerima = HakCipta::where('status', 'Tercatat')->count();
        $hcKet = HakCipta::where('status', 'Keterangan belum lengkap')->count();

        $paten2024 = Paten::whereYear('tanggal_permohonan','2024')->count();
        $hc2024 = HakCipta::whereYear('tanggal_permohonan','2024')->count();
        $di2024 = DesainIndustri::whereYear('tanggal_permohonan','2024')->count();
        $gabungKi2024 = $paten2024 + $di2024 + $hc2024 ;

        $paten2025 = Paten::whereYear('tanggal_permohonan','2025')->count();
        $hc2025 = HakCipta::whereYear('tanggal_permohonan','2025')->count();
        $di2025 = DesainIndustri::whereYear('tanggal_permohonan','2025')->count();
        $gabungKi2025 = $paten2025 + $di2025 + $hc2025 ;

        $paten2026 = Paten::whereYear('tanggal_permohonan','2026')->count();
        $hc2026 = HakCipta::whereYear('tanggal_permohonan','2026')->count();
        $di2026 = DesainIndustri::whereYear('tanggal_permohonan','2026')->count();
        $gabungKi2026 = $paten2026 + $di2026 + $hc2026 ;

        $paten2027 = Paten::whereYear('tanggal_permohonan','2027')->count();
        $hc2027 = HakCipta::whereYear('tanggal_permohonan','2027')->count();
        $di2027 = DesainIndustri::whereYear('tanggal_permohonan','2027')->count();
        $gabungKi2027 = $paten2027 + $di2027 + $hc2027 ;
        return view('umum-page.Hakcipta.index', compact('hc','tercatat','null','tolak','itung', 'hcTolak','hcTerima','hcKet','mvdov','hc2024','hc2025','hc2026','hc2027','gabungKi2024','gabungKi2025','gabungKi2026','gabungKi2027'));
    }

    public function listTercatat()
    {
        $cek = HakCipta::latest()->where('status', 'Tercatat')->get();
        return view('hc-tercatat.index', compact('cek'));
    }
    public function belumLengkap()
    {
        $cek = HakCipta::latest()->where('status', 'Keterangan Belum Lengkap')->get();
        return view('hc-kbl.index', compact('cek'));
    }
    public function tolak()
    {
        $cek = HakCipta::latest()->where('status', 'Ditolak')->get();
        return view('hc-t.index', compact('cek'));
    }
    public function mvdov()
    {
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->get();
        return view('hc-mvdov.index', compact('mvdov'));
    }
    public function pegawai()
    {
        $orang = HakCipta::orderBy('nama_lengkap', 'asc')->get();
        return view('umum-page.Hakcipta.perorangan.index', compact('orang'));
    }
    public function cariPegawai(Request $request)
    {
        $cario = $request->input('nama');
        $nama = HakCipta::orderBy('nama_lengkap','asc')->get();
        $orang = HakCipta::where('nama_lengkap','LIKE',"%".$cario."%")->orderBy('nama_lengkap', 'asc')->paginate(15);
        return view('umum-page.Hakcipta.perorangan.cari', compact('nama', 'orang'));
    }
    public function jurusan()
    {
        return view('umum-page.Hakcipta.jurusan.index');
    }
    public function cariJurusan(Request $request)
    {
        $carij = $request->input('jurusan');
        $jurusan = HakCipta::where('jurusan','LIKE',"%".$carij."%")->paginate(15);
        return view('umum-page.Hakcipta.jurusan.cari', compact('jurusan'));
    }
    public function prodi()
    {
        return view('umum-page.Hakcipta.prodi.index');
    }
    public function cariProdi(Request $request)
    {
        $cariprodi = $request->input('prodi');
        $prodi = HakCipta::where('prodi','LIKE',"%".$cariprodi."%")->paginate(15);
        return view('umum-page.Hakcipta.prodi.cari', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pengajuan()
    {
        return view('pengajuanhk.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap'=> 'required',
            'alamat'=> 'required',
            'no_telepon'=> 'required',
            'tanggal_lahir'=> 'required',
            'ktp_inventor'=> 'required|mimes:pdf',
            'email'=> 'required|email',
            'kewarganegaraan'=> 'required',
            'kode_pos'=> 'required',
            'jenis_ciptaan'=> 'required',
            'judul_ciptaan'=> 'required',
            'uraian_singkat'=>'required|max:60000',
            'dokumen_invensi'=>'required|mimes:pdf',
            'surat_pengalihan'=>'required|mimes:pdf',
            'surat_pernyataan'=>'required|mimes:pdf',
            'tanggal_permohonan'=>'required'

        ]);

        $hc = new HakCipta();
        $hc->nama_lengkap = $request->nama_lengkap;
        $hc->alamat = $request->alamat;
        $hc->no_telepon = $request->no_telepon;
        $hc->tanggal_lahir = $request->tanggal_lahir;
        $hc->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-hc');
        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->jenis_ciptaan = $request-> jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);

        return redirect('/pengajuan-hak-cipta')->with('success', 'Data hak cipta berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hc = HakCipta::find($id);
        return view('hcshow.index', compact('hc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

