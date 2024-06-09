<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesainIndustri;

class AdminDesainIndustriController extends Controller
{
    public function index()
    {   
        $di = DesainIndustri::with('cekDi')->latest()->get();
        $beri = DesainIndustri::where('status','Diberi')->count();
        $proses = DesainIndustri::where('status','Dalam Proses Usulan')->count();
        $priksa = DesainIndustri::where('status','Pemeriksaan')->count();
        $null = DesainIndustri::where('status','Keterangan Belum Lengkap')->count();
        $tolak = DesainIndustri::where('status','Ditolak')->count();
        return view('admin.admindi.index', compact('di', 'priksa', 'proses', 'null','tolak','beri')); 
    }

    public function diberi()
    {
        $cek = DesainIndustri::latest()->where('status','Diberi')->get();
        return view('admin.admindi.admin-di-beri.index', compact('cek')); 
    }
    public function proses()
    {
        $cek = DesainIndustri::latest()->where('status','Dalam Proses Usulan')->get();
        return view('admin.admindi.admin-di-proses.index', compact('cek'));
    }
    public function pemeriksaan()
    {
        $cek = DesainIndustri::latest()->where('status','Pemeriksaan')->get();
        return view('admin.admindi.admin-di-priksa.index', compact('cek'));
    }
    public function ditolak()
    {
        $cek = DesainIndustri::latest()->where('status','Ditolak')->get();
        return view('admin.admindi.admin-di-tolak.index', compact('cek'));
    }
    public function keteranganBelumLengkap()
    {
        $cek = DesainIndustri::latest()->where('status','Keterangan Belum Lengkap')->get();
        return view('admin.admindi.admin-di-null.index', compact('cek'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('admin.admindi.showdi.index', compact('di'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('admin.admindi.editdi.index', compact('di'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
            'tanggal_permohonan'=>'required',
            'status'=>'required',
            'sertifikat_desain'=>'mimes:pdf',

        ]);

        $di = DesainIndustri::find($id);
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
        $di->status = $request->status;
        if ($request->file('sertifikat_desain') == null) {
            $di->sertifikat_desain = "";
        }else{
           $di->sertifikat_desain = $request->file('sertifikat_desain')->store('dokumen-di');  
        }
        $di->save($validasidata);
        return redirect('/admin/desain-industri')->with('success', 'Data desain industri berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DesainIndustri::findOrFail($id)->delete();
        return redirect()->back();
    }
}
