<?php

namespace App\Http\Controllers;

use App\Models\HakCipta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    public function mvdov()
    {
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->paginate(5);
        return view('admin.adminhk.admin-hc-mvdov.index', compact('mvdov'));
    }
    public function cariHk(Request $request)
    {
        $cari = $request->input('cari');
        $hak_cipta = HakCipta::with('cekhc')->where('judul_ciptaan', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->orWhere('institusi', 'LIKE', "%" . $cari . "%")->paginate(5);
        $tercatat = HakCipta::where('status', 'Tercatat')->count();
        $tolak = HakCipta::where('status', 'Ditolak')->count();
        $null = HakCipta::where('status', 'Keterangan Belum Lengkap')->count();
        $mvdov = HakCipta::where('status', 'Menunggu Verifikasi Data Oleh Verifikator ')->count();

        return view('admin.adminhk.index', compact('hak_cipta','tercatat','null','tolak', 'mvdov'));
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
        if($hk->institusi === 'Dosen'){
            return view('admin.adminhk.edithk.dosen', compact('hk'));
        }else if($hk->institusi === 'Umum'){
            return view('admin.adminhk.edithk.umum', compact('hk'));
        }
    }
    public function updateHcDosen(Request $request, string $id)
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
            'jenis_ciptaan' => 'required',
            'judul_ciptaan' => 'required',
            'uraian_singkat' => 'required|max:60000',
            'dokumen_invensi' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'

        ]);

        $hc = HakCipta::find($id);
        $hc->nama_lengkap = $request->nama_lengkap;
        $hc->alamat = $request->alamat;
        $hc->no_telepon = $request->no_telepon;
        $hc->tanggal_lahir = $request->tanggal_lahir;
        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;
        $hc->jurusan = $request->jurusan;
        $hc->prodi = $request->prodi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->tanggal_permohonan = $request->tanggal_permohonan;

        // Mengupdate file jika ada file baru yang diunggah
        if ($request->hasFile('ktp_inventor')) {
            // Hapus file lama jika perlu
            if ($hc->ktp_inventor) {
                Storage::delete($hc->ktp_inventor);
            }
            $hc->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-hc');
        }

        if ($request->hasFile('data_pengaju2')) {
            if ($hc->data_pengaju2) {
                Storage::delete($hc->data_pengaju2);
            }
            $hc->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-hc');
        }

        if ($request->hasFile('dokumen_invensi')) {
            if ($hc->dokumen_invensi) {
                Storage::delete($hc->dokumen_invensi);
            }
            $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pengalihan')) {
            if ($hc->surat_pengalihan) {
                Storage::delete($hc->surat_pengalihan);
            }
            $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pernyataan')) {
            if ($hc->surat_pernyataan) {
                Storage::delete($hc->surat_pernyataan);
            }
            $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        }

        // Simpan perubahan ke database
        $hc->save($validasidata);

        return redirect('/admin/hak-cipta')->with('success','Data hak cipta berhasil di update');
    }
    public function updateHcUmum(Request $request, string $id)
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
            'jenis_ciptaan' => 'required',
            'judul_ciptaan' => 'required',
            'uraian_singkat' => 'required|max:60000',
            'dokumen_invensi' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'

        ]);

        $hc = HakCipta::find($id);
        $hc->nama_lengkap = $request->nama_lengkap;
        $hc->alamat = $request->alamat;
        $hc->no_telepon = $request->no_telepon;
        $hc->tanggal_lahir = $request->tanggal_lahir;
        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->tanggal_permohonan = $request->tanggal_permohonan;

        // Mengupdate file jika ada file baru yang diunggah
        if ($request->hasFile('ktp_inventor')) {
            // Hapus file lama jika perlu
            if ($hc->ktp_inventor) {
                Storage::delete($hc->ktp_inventor);
            }
            $hc->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-hc');
        }
        if ($request->hasFile('dokumen_invensi')) {
            if ($hc->dokumen_invensi) {
                Storage::delete($hc->dokumen_invensi);
            }
            $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pengalihan')) {
            if ($hc->surat_pengalihan) {
                Storage::delete($hc->surat_pengalihan);
            }
            $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pernyataan')) {
            if ($hc->surat_pernyataan) {
                Storage::delete($hc->surat_pernyataan);
            }
            $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        }

        // Simpan perubahan ke database
        $hc->save($validasidata);
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
    public function tambahDosen()
    {
        return view('admin.adminhk.tambah.dosen');
    }
    public function tambahHcUmum()
    {
        return view('admin.adminhk.tambah.umum');
    }

    public function storeTambahHcDosen(Request $request)
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
            'jenis_ciptaan' => 'required',
            'judul_ciptaan' => 'required',
            'uraian_singkat' => 'required|max:60000',
            'dokumen_invensi' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'

        ]);

        $hc = new HakCipta();
        $hc->user_id = Auth::user()->id;
        $hc->nama_lengkap = $request->nama_lengkap;
        $hc->alamat = $request->alamat;
        $hc->no_telepon = $request->no_telepon;
        $hc->tanggal_lahir = $request->tanggal_lahir;

        if ($request->hasFile('ktp_inventor')) {
            $hc->ktp_inventor = $request->file('ktp_inventor')->store("dokumen-hc");
        }

        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;

        if ($request->hasFile('data_pengaju2')) {
            $hc->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-hc');
        }

        $hc->jurusan = $request->jurusan;
        $hc->prodi = $request->prodi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;

        if ($request->hasFile('dokumen_invensi')) {
            $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pengalihan')) {
            $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pernyataan')) {
            $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        }

        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);

        return redirect('/admin/hak-cipta')->with('success', 'Data hak cipta berhasil ditambahkan');
    }
    public function storeTambahHcUmum(Request $request)
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
            'jenis_ciptaan' => 'required',
            'judul_ciptaan' => 'required',
            'uraian_singkat' => 'required|max:60000',
            'dokumen_invensi' => 'required|mimes:pdf',
            'surat_pengalihan' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'tanggal_permohonan' => 'required'

        ]);

        $hc = new HakCipta();
        $hc->user_id = Auth::user()->id;
        $hc->nama_lengkap = $request->nama_lengkap;
        $hc->alamat = $request->alamat;
        $hc->no_telepon = $request->no_telepon;
        $hc->tanggal_lahir = $request->tanggal_lahir;

        if ($request->hasFile('ktp_inventor')) {
            $hc->ktp_inventor = $request->file('ktp_inventor')->store("dokumen-hc");
        }

        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;

        if ($request->hasFile('dokumen_invensi')) {
            $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pengalihan')) {
            $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        }

        if ($request->hasFile('surat_pernyataan')) {
            $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        }

        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);
        return redirect('/admin/hak-cipta')->with('success', 'Data hak cipta berhasil ditambahkan');
    }
}
