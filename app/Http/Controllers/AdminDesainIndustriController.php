<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $di = DesainIndustri::with('cekDi')->find($id);
        return view('admin.admindi.showdi.index', compact('di'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $di = DesainIndustri::find($id);
        if($di->institusi === 'Dosen'){
            return view('admin.admindi.editdi.dosen', compact('di'));
        }else if($di->institusi === 'Umum'){
            return view('admin.admindi.editdi.umum', compact('di'));
        }
    }
    public function updateDiDosen(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required',
            'ktp_inventor' => 'required|mimes:pdf',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required',
            'institusi' => 'required',
            'data_pengaju2' => 'mimes:xlsx',
            'jurusan' => 'required',
            'prodi' => 'required',
            'jenis_di' => 'required',
            'judul_di' => 'required',
            'uraian_di' => 'required|mimes:pdf',
            'gambar_di' => 'required|mimes:pdf',
            'surat_kepemilikan' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'
        ]);
        $di = DesainIndustri::find($id);
        $di->nama_lengkap = $request->nama_lengkap;
        $di->alamat = $request->alamat;
        $di->no_telepon = $request->no_telepon;
        $di->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('ktp_inventor')) {
            if ($di->ktp_inventor) {
                Storage::delete($di->ktp_inventor);
            }
            $di->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-di');
        }
        $di->email = $request->email;
        $di->kewarganegaraan = $request->kewarganegaraan;
        $di->kode_pos = $request->kode_pos;
        $di->institusi = $request->institusi;
        if ($request->hasFile('data_pengaju2')) {
            if ($di->data_pengaju2) {
                Storage::delete($di->data_pengaju2);
            }
            $di->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-di');
        }
        $di->jurusan = $request->jurusan;
        $di->prodi = $request->prodi;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        if ($request->hasFile('uraian_di')) {
            if ($di->uraian_di) {
                Storage::delete($di->uraian_di);
            }
            $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        }
        if ($request->hasFile('gambar_di')) {
            if ($di->gambar_di) {
                Storage::delete($di->gambar_di);
            }
            $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        } 
        if ($request->hasFile('surat_kepemilikan')) {
            if ($di->surat_kepemilikan) {
                Storage::delete($di->surat_kepemilikan);
            }
            $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        }
        if ($request->hasFile('surat_pengalihan')) {
            if ($di->surat_pengalihan) {
                Storage::delete($di->surat_pengalihan);
            }
            $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        }
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);
        return redirect('/admin/desain-industri')->with('success', 'Data desain industri berhasil di update');
    }
    public function upateDiUmum(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required',
            'ktp_inventor' => 'required|mimes:pdf',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required',
            'institusi' => 'required',
            'jenis_di' => 'required',
            'judul_di' => 'required',
            'uraian_di' => 'required|mimes:pdf',
            'gambar_di' => 'required|mimes:pdf',
            'surat_kepemilikan' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'
        ]);
        $di = DesainIndustri::find($id);
        $di->user_id = Auth::user()->id;
        $di->nama_lengkap = $request->nama_lengkap;
        $di->alamat = $request->alamat;
        $di->no_telepon = $request->no_telepon;
        $di->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('ktp_inventor')) {
            if ($di->ktp_inventor) {
                Storage::delete($di->ktp_inventor);
            }
            $di->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-di');
        }
        $di->email = $request->email;
        $di->kewarganegaraan = $request->kewarganegaraan;
        $di->kode_pos = $request->kode_pos;
        $di->institusi = $request->institusi;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        if ($request->hasFile('uraian_di')) {
            if ($di->uraian_di) {
                Storage::delete($di->uraian_di);
            }
            $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        }
        if ($request->hasFile('gambar_di')) {
            if ($di->gambar_di) {
                Storage::delete($di->gambar_di);
            }
            $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        } 
        if ($request->hasFile('surat_kepemilikan')) {
            if ($di->surat_kepemilikan) {
                Storage::delete($di->surat_kepemilikan);
            }
            $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        }
        if ($request->hasFile('surat_pengalihan')) {
            if ($di->surat_pengalihan) {
                Storage::delete($di->surat_pengalihan);
            }
            $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        }
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);
        return redirect('/admin/desain-industri')->with('success', 'Data desain industri berhasil di update');
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
        return view('admin.admindi.tambah.dosen');
    }
    public function tambahDiUmum()
    {
        return view('admin.admindi.tambah.umum');
    }

    public function storeDiDosen(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required',
            'ktp_inventor' => 'required|mimes:pdf',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required',
            'institusi' => 'required',
            'data_pengaju2' => 'mimes:xlxs',
            'jurusan' => 'required',
            'prodi' => 'required',
            'jenis_di' => 'required',
            'judul_di' => 'required',
            'uraian_di' => 'required|mimes:pdf',
            'gambar_di' => 'required|mimes:pdf',
            'surat_kepemilikan' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'
        ]);
        $di = new DesainIndustri();
        $di->user_id = Auth::user()->id;
        $di->nama_lengkap = $request->nama_lengkap;
        $di->alamat = $request->alamat;
        $di->no_telepon = $request->no_telepon;
        $di->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('ktp_inventor')) {
            $di->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-di');
        }
        $di->email = $request->email;
        $di->kewarganegaraan = $request->kewarganegaraan;
        $di->kode_pos = $request->kode_pos;
        $di->institusi = $request->institusi;
        if ($request->hasFile('data_pengaju2')) {
            $di->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-di');
        }
        $di->jurusan = $request->jurusan;
        $di->prodi = $request->prodi;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        if ($request->hasFile('uraian_di')) {
            $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        }
        if ($request->hasFile('gambar_di')) {
            $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        } 
        if ($request->hasFile('surat_kepemilikan')) {
            $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        }
        if ($request->hasFile('surat_pengalihan')) {
            $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        }
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);

        return redirect('/admin/desain-industri')->with('success', 'Data desain industri berhasil di tambahkan');
    }
    public function storeDiUmum(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required',
            'ktp_inventor' => 'required|mimes:pdf',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required',
            'institusi' => 'required',
            'jenis_di' => 'required',
            'judul_di' => 'required',
            'uraian_di' => 'required|mimes:pdf',
            'gambar_di' => 'required|mimes:pdf',
            'surat_kepemilikan' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'
        ]);
        $di = new DesainIndustri();
        $di->user_id = Auth::user()->id;
        $di->nama_lengkap = $request->nama_lengkap;
        $di->alamat = $request->alamat;
        $di->no_telepon = $request->no_telepon;
        $di->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('ktp_inventor')) {
            $di->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-di');
        }
        $di->email = $request->email;
        $di->kewarganegaraan = $request->kewarganegaraan;
        $di->kode_pos = $request->kode_pos;
        $di->institusi = $request->institusi;
        $di->jenis_di = $request->jenis_di;
        $di->judul_di = $request->judul_di;
        if ($request->hasFile('uraian_di')) {
            $di->uraian_di = $request->file('uraian_di')->store('dokumen-di');
        }
        if ($request->hasFile('gambar_di')) {
            $di->gambar_di = $request->file('gambar_di')->store('dokumen-di');
        } 
        if ($request->hasFile('surat_kepemilikan')) {
            $di->surat_kepemilikan = $request->file('surat_kepemilikan')->store('dokumen-di');
        }
        if ($request->hasFile('surat_pengalihan')) {
            $di->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-di');
        }
        $di->tanggal_permohonan = $request->tanggal_permohonan;
        $di->save($validasidata);

        return redirect('/admin/desain-industri')->with('success', 'Data desain industri berhasil di tambahkan');
    }
}
