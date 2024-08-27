<?php

namespace App\Http\Controllers;

use App\Models\HakCipta;
use Illuminate\Http\Request;

class AdminHaKCiptaController extends Controller
{
    public function index()
    {
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator ')->count();
        $hak_cipta = HakCipta::with('cekhc')->latest()->paginate(5);
        return view('admin.adminhk.index', compact('hak_cipta','tercatat','null','tolak','mvdov'));
    }

    public function listTercatat()
    {
        $cek = HakCipta::latest()->where('status', 'Tercatat')->get();
        return view('admin.adminhk.admin-hc-tercatat.index', compact('cek'));
    }
    public function belumLengkap()
    {
        $cek = HakCipta::latest()->where('status', 'Keterangan Belum Lengkap')->get();
        return view('admin.adminhk.admin-hc-kbl.index', compact('cek'));
    }
    public function tolak()
    {
        $cek = HakCipta::latest()->where('status', 'Ditolak')->get();
        return view('admin.adminhk.admin-hc-t.index', compact('cek'));
    }
    public function cariHk(Request $request)
    {
        $cari = $request->input('cari');
        $hak_cipta = HakCipta::with('cekhc')->where('judul_ciptaan', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5);
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        return view('admin.adminhk.index', compact('hak_cipta','tercatat','null','tolak'));
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
        $hc = HakCipta::find($id);
        return view('admin.adminhk.showhc.index', compact('hc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hk = HakCipta::find($id);
        return view('admin.adminhk.edithk.index', compact('hk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasidata = $request->validate([
           
            'sertifikat_hakcipta'=>'mimes:pdf'

        ]);
        $hc = HakCipta::find($id);
        $hc->status = $request->status;
        if ($request->file('sertifikat_hakcipta') == null) {
            $hc->sertifikat_hakcipta = "";
        }else{
           $hc->sertifikat_hakcipta = $request->file('sertifikat_hakcipta')->store('dokumen-hc');  
        }
        $hc->save($validasidata);
        return redirect('/admin/hak-cipta')->with('success','Data hak cipta berhasil di update')
        ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HakCipta::with('cekhc')->findOrFail($id)->delete();
        return redirect()->back()->with('success','Data hak cipta berhasil dihapus');
    }
}
