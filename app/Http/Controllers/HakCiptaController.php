<?php

namespace App\Http\Controllers;

use App\Models\HakCipta;
use Illuminate\Http\Request;

class HakCiptaController extends Controller
{
    public function index()
    {
        $itung = HakCipta::all()->count();
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $hc = HakCipta::latest()->paginate(5);
        return view('Hakcipta.index', compact('hc','tercatat','null','tolak','itung'));
    }
    public function cari(Request $request){
        $carijudul = $request->input('cari_hc');
        $carinama = $request->input('cari_nama');
        $hc = HakCipta::where('judul_ciptaan','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5);

        $itung = HakCipta::all()->count();
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        return view('Hakcipta.index', compact('hc','tercatat','null','tolak','itung'));
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

