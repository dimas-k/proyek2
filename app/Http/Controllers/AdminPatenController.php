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
        $paten = Paten::with('cek')->latest()->paginate(5);
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->count();
        $mp = Paten::where('status', 'Masa pengumuman')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->count();
        $mvdov = Paten::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();
        $beri = Paten::where('status', 'Diberi')->count();
        $tolak = Paten::where('status', 'Ditolak')->count();
        return view('admin.adminpaten.index', compact('paten','pf','mt','mp','mps','staw','stl','stak','mts','beri','tolak', 'mvdov'));
    }
    public function cariPaten(Request $request)
    {
        $cari = $request->input('cari');
        $paten = Paten::with('cek')->where('judul_paten', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->orWhere('institusi', 'LIKE', "%" . $cari . "%")->paginate(5);
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
        $mvdov = Paten::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();
        return view('admin.adminpaten.index', compact('paten','pf','mt','mp','mps','staw','stl','stak','mts','beri','tolak','mvdov'));
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
    public function mvdov()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->get();
        return view('admin.adminpaten.admin-paten-mvdov.index', compact('cek'));
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
        $p = Paten::with('cek')->find($id);
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
            'status'=>'required',
            'sertifikat_paten'=> 'mimes:pdf'
        ]);
        $paten = Paten::find($id);
        
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
        Paten::with('cek')->findOrFail($id)->delete();
        return redirect()->back()->with('success','Data paten berhasil dihapus');
    }
}
