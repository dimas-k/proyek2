<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use Illuminate\Http\Request;

class AdminPatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::latest()->get();
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->count();
        $mp = Paten::where('status', 'Masa pengumuman')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->count();
        $beri = Paten::where('status', 'Diberi')->count();
        $tolak = Paten::where('status', 'Ditolak')->count();
        return view('admin.adminpaten.index', compact('paten','pf','mt','mp','mps','staw','stl','stak','mts','beri','tolak'));
    }

    public function pemeriksaanFormalitas()
    {
        $cek = Paten::latest()->where('status', 'Pemeriksaan Formalitas')->get();
        return view('admin.adminpaten.admin-paten-pf.index', compact('cek'));
    }

    public function menungguTanggapan()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Tanggapan Formalitas')->get();
        return view('admin.adminpaten.admin-paten-mt.index', compact('cek'));
    }

    public function masaPengumuman()
    {
        $cek = Paten::latest()->where('status', 'Masa Pengumuman')->get();
        return view('admin.adminpaten.admin-paten-mp.index', compact('cek'));
    }

    public function pembayaranSubstansif()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Pembayaran Substansif')->get();
        return view('admin.adminpaten.admin-paten-mps.index', compact('cek'));
    }

    public function substansifAwal()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Awal')->get();
        return view('admin.adminpaten.admin-paten-staw.index', compact('cek'));
    }

    public function substansifLanjut()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Lanjut')->get();
        return view('admin.adminpaten.admin-paten-stl.index', compact('cek'));
    }
    public function substansifAkhir()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Akhir')->get();
        return view('admin.adminpaten.admin-paten-stak.index', compact('cek'));
    }
    public function mengungguTanggapanSubstansif()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Tanggapan Substansif')->get();
        return view('admin.adminpaten.admin-paten-mts.index', compact('cek'));
    }
    public function diberi()
    {
        $cek = Paten::latest()->where('status', 'Diberi')->get();
        return view('admin.adminpaten.admin-paten-beri.index', compact('cek'));
    }
    public function ditolak()
    {
        $cek = Paten::latest()->where('status', 'Ditolak')->get();
        return view('admin.adminpaten.admin-paten-tlk.index', compact('cek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cari(Request $request)
    {
        
    }
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
        $p = Paten::find($id);
        return view('admin.adminpaten.showpaten.index', compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $p = Paten::find($id);
        return view('admin.adminpaten.editpaten.index', compact('p'));
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
            'jenis_paten'=> 'required',
            'judul_paten'=> 'required',
            'klaim'=> 'required|mimes:pdf',
            'pernyataan_kepemilikan'=> 'required|mimes:pdf',
            'surat_kuasa'=> 'required|mimes:pdf',
            'gambar_paten'=> 'required|mimes:pdf',
            'gambar_tampilan'=> 'required|mimes:pdf',
            'sertifikat_paten'=> 'mimes:pdf'
        ]);
        $paten = Paten::find($id);
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->jenis_paten = $request-> jenis_paten;
        $paten->judul_paten = $request->judul_paten;
        $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
        $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
        $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
        $paten->klaim = $request->file('klaim')->store('dokumen-paten');
        $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
        $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
        $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
        $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
        $paten->tanggal_permohonan = $request->tanggal_permohonan;
        $paten->status = $request->status;
        if ($request->file('sertifikat_paten') == null) {
            $paten->sertifikat_paten = "";
        }else{
           $paten->sertifikat_paten = $request->file('sertifikat_paten')->store('dokumen-paten');  
        }
        $paten->save($validasidata);
        // dd($request);
        return redirect('/admin/paten')->with('success','Data paten berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Paten::findOrFail($id)->delete();
        return redirect()->back();
    }
}
