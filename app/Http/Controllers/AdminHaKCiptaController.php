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
        $hak_cipta = HakCipta::latest()->get();
        return view('adminhk.index', compact('hak_cipta','tercatat','null','tolak'));
    }

    public function listTercatat()
    {
        $cek = HakCipta::latest()->where('status', 'Tercatat')->get();
        return view('admin-hc-tercatat.index', compact('cek'));
    }
    public function belumLengkap()
    {
        $cek = HakCipta::latest()->where('status', 'Keterangan Belum Lengkap')->get();
        return view('admin-hc-kbl.index', compact('cek'));
    }
    public function tolak()
    {
        $cek = HakCipta::latest()->where('status', 'Ditolak')->get();
        return view('admin-hc-t.index', compact('cek'));
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
        return view('showhc.index', compact('hc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hk = HakCipta::find($id);
        return view('edithk.index', compact('hk'));
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
            'jenis_ciptaan'=> 'required',
            'judul_ciptaan'=> 'required',
            'uraian_singkat'=>'required',
            'dokumen_invensi'=>'required|mimes:pdf',
            'surat_pengalihan'=>'required|mimes:pdf',
            'surat_pernyataan'=>'required|mimes:pdf',
            'tanggal_permohonan'=>'required',
            'status'=>'required',
            'sertifikat_hakcipta'=>'mimes:pdf'

        ]);
        $hc = HakCipta::find($id);
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
        $hc->status = $request->status;
        if ($request->file('sertifikat_hakcipta') == null) {
            $hc->sertifikat_hakcipta = "";
        }else{
           $hc->sertifikat_hakcipta = $request->file('sertifikat_hakcipta')->store('dokumen-hc');  
        }
        $hc->save($validasidata);
        return redirect('/admin/hak-cipta')->with('success','Data hak cipta berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HakCipta::findOrFail($id)->delete();
        return redirect()->back();
    }
}
