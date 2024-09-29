<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesainIndustri;

class AdminDesainIndustriController extends Controller
{
    public function index()
    {   
        $desain = DesainIndustri::with('cekDi')->latest()->paginate(5);
        $beri = DesainIndustri::where('status','Diberi')->count();
        $proses = DesainIndustri::where('status','Dalam Proses Usulan')->count();
        $priksa = DesainIndustri::where('status','Pemeriksaan')->count();
        $null = DesainIndustri::where('status','Keterangan Belum Lengkap')->count();
        $mvdov = DesainIndustri::where('status','Menunggu Verifikasi Data Oleh Verifikator')->count();
        $tolak = DesainIndustri::where('status','Ditolak')->count();
        return view('admin.admindi.index', compact('desain', 'priksa', 'proses', 'null','tolak','beri','mvdov')); 
    }
    public function cariDi(Request $request)
    {
        $cari = $cari = $request->input('cari');
        $desain = DesainIndustri::with('cekDi')->where('judul_di', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->orWhere('institusi', 'LIKE', "%" . $cari . "%")->paginate(5);
        $beri = DesainIndustri::where('status','Diberi')->count();
        $proses = DesainIndustri::where('status','Dalam Proses Usulan')->count();
        $priksa = DesainIndustri::where('status','Pemeriksaan')->count();
        $null = DesainIndustri::where('status','Keterangan Belum Lengkap')->count();
        $tolak = DesainIndustri::where('status','Ditolak')->count();
        return view('admin.admindi.index', compact('desain', 'priksa', 'proses', 'null','tolak','beri')); 
    }

    public function diberi()
    {
        $cek = DesainIndustri::latest()->where('status','Diberi')->paginate(5);
        return view('admin.admindi.admin-di-beri.index', compact('cek')); 
    }
    public function proses()
    {
        $cek = DesainIndustri::latest()->where('status','Dalam Proses Usulan')->paginate(5);
        return view('admin.admindi.admin-di-proses.index', compact('cek'));
    }
    public function pemeriksaan()
    {
        $cek = DesainIndustri::latest()->where('status','Pemeriksaan')->paginate(5);
        return view('admin.admindi.admin-di-priksa.index', compact('cek'));
    }
    public function ditolak()
    {
        $cek = DesainIndustri::latest()->where('status','Ditolak')->paginate(5);
        return view('admin.admindi.admin-di-tolak.index', compact('cek'));
    }
    public function keteranganBelumLengkap()
    {
        $cek = DesainIndustri::latest()->where('status','Keterangan Belum Lengkap')->paginate(5);
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
            
            'status'=>'required',
            'sertifikat_desain'=>'mimes:pdf',

        ]);

        $di = DesainIndustri::find($id);
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
        DesainIndustri::with('cekDi')->findOrFail($id)->delete();
        return redirect()->back()->with('success','Data desain industri berhasil dihapus');
    }
    public function tambahDiDosen()
    {
        return view();
    }
}
