<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use App\Models\HakCipta;
use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use Illuminate\Routing\Controller;

class DesainIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itung = DesainIndustri::all()->count();
        $di = DesainIndustri::latest()->paginate(5);
        $beri = DesainIndustri::where('status','Diberi')->count();
        $proses = DesainIndustri::where('status','Dalam Proses Usulan')->count();
        $priksa = DesainIndustri::where('status','Pemeriksaan')->count();
        $null = DesainIndustri::where('status','Keterangan Belum Lengkap')->count();
        $tolak = DesainIndustri::where('status','Ditolak')->count();

        $desainDi = DesainIndustri::where('status', 'Diberi')->count();
        $desainDK = DesainIndustri::where('status', 'Ditolak')->count();
        $desainP = DesainIndustri::where('status', 'Pemeriksaan')->count();
        $desainKBL = DesainIndustri::where('status', 'Keterangan belum lengkap')->count();
        $desainDPU = DesainIndustri::where('status', 'Dalam proses usulan')->count();

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


        return view('umum-page.Desainindustri.index', compact('di', 'priksa', 'proses', 'null','tolak','beri','itung','desainDi','desainDK','desainP','desainKBL','desainDPU','di2024','di2025','di2026','di2027','gabungKi2024','gabungKi2025','gabungKi2026','gabungKi2027')); 
    }
    
    public function diberi()
    {
        $cek = DesainIndustri::latest()->where('status','Diberi')->get();
        return view('di-beri.index', compact('cek')); 
    }
    public function proses()
    {
        $cek = DesainIndustri::latest()->where('status','Dalam Proses Usulan')->get();
        return view('di-proses.index', compact('cek'));
    }
    public function pemeriksaan()
    {
        $cek = DesainIndustri::latest()->where('status','Pemeriksaan')->get();
        return view('di-priksa.index', compact('cek'));
    }
    public function ditolak()
    {
        $cek = DesainIndustri::latest()->where('status','Ditolak')->get();
        return view('di-tolak.index', compact('cek'));
    }
    public function keteranganBelumLengkap()
    {
        $cek = DesainIndustri::latest()->where('status','Keterangan Belum Lengkap')->get();
        return view('di-null.index', compact('cek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pengajuan()
    {
        return view('pengajuandi.index');
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
            'jenis_di'=> 'required',
            'judul_di'=>'required',
            'uraian_di'=>'required|mimes:pdf',
            'gambar_di'=>'required|mimes:pdf',
            'surat_kepemilikan'=>'required|mimes:pdf',
            'surat_pengalihan'=>'required|mimes:pdf',
            'tanggal_permohonan'=>'required'
        ]);
        $di = new DesainIndustri();
        $di->nama_lengkap = $request->nama_lengkap;
        $di->alamat = $request->alamat;
        $di->no_telepon = $request->no_telepon;
        $di->tanggal_lahir = $request->tanggal_lahir;
        $di->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-di');
        $di->email = $request->email;
        $di->kewarganegaraan = $request->kewarganegaraan;
        $di->kode_pos = $request->kode_pos;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);

        return redirect('/pengajuan-desain-industri')->with('success', 'Data desain industri berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('di-show.index', compact('di'));
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
