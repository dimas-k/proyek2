<?php

namespace App\Http\Controllers;

use App\Models\DesainIndustri;
use App\Models\HakCipta;
use App\Models\Paten;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::count();
        $hc = HakCipta::count();
        $di = DesainIndustri::count();
        return view('dosen.index', compact('paten','hc','di'));
    }
    public function paten()
    {
        $paten = Paten::latest()->paginate(5);
        return view('dosen.paten.index', compact('paten'));
    }
    public function hakCipta()
    {
        $hc = HakCipta::latest()->paginate(5);
        return view('dosen.hakcipta.index', compact('hc'));
    }
    public function pengajuanPaten()
    {
        return view('dosen.paten.pengajuan.index');
    }
    public function pengajuanHc()
    {
        return view('dosen.hakcipta.pengajuan.index');
    }
    public function desainIndustri()
    {
        $di = DesainIndustri::latest()->paginate(5);
        return view('dosen.desainindustri.index', compact('di'));
    }
    public function pengajuanDi()
    {
        return view('dosen.desainindustri.pengajuan.index');
    }
    public function hapusPaten(string $id)
    {
        Paten::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function lihatPaten(string $id)
    {
        $paten = Paten::find($id);
        return view('dosen.paten.lihat.index', compact('paten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function storePaten(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap'=> 'required',
            'alamat'=> 'required',
            'no_telepon'=> 'required',
            'tanggal_lahir'=> 'required',
            'ktp_inventor'=> 'required|mimes:pdf',
            'email'=> 'required|email',
            'kewarganegaraan'=> 'required',
            'kode_pos'=> 'required|integer',
            'institusi'=> 'required',
            'jenis_paten'=> 'required',
            'judul_paten'=> 'required',
            'deskripsi_paten'=> 'required|mimes:pdf|max:2028',
            'abstrak_paten'=> 'required|mimes:pdf|max:2028',
            'pengalihan_hak'=> 'required|mimes:pdf|max:2028',
            'klaim'=> 'required|mimes:pdf',
            'pernyataan_kepemilikan'=> 'required|mimes:pdf',
            'surat_kuasa'=> 'required|mimes:pdf',
            'gambar_paten'=> 'required|mimes:pdf',
            'gambar_tampilan'=> 'required|mimes:pdf',
        ]);
        $paten = new Paten();
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
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
        
        $paten->save($validasidata);
        
        return redirect('/dosen/pengajuan/paten')->with('success', 'Data Paten berhasil Disimpan!');
    }
    public function storeHc(Request $request)
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
            'institusi'=> 'required',
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
        $hc->institusi = $request->institusi;
        $hc->jenis_ciptaan = $request-> jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);

        return redirect('/dosen/hak-cipta/pengajuan')->with('success', 'Data hak cipta berhasil Disimpan!');
    }
    public function storeDi(Request $request)
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
            'institusi'=> 'required',
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
        $di->institusi = $request->institusi;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);

        return redirect('/dosen/desain-industri/pengajuan')->with('success', 'Data desain industri berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
