<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $cek = Paten::latest()->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->paginate(5);
        return view('admin.adminpaten.admin-paten-mvdov.index', compact('cek'));
    }

    public function tambahPatenDosen()
    {
        return view('admin.adminpaten.tambah.dosen');
    }
    public function tambahPatenUmum()
    {
        return view('admin.adminpaten.tambah.umum');
    }

    public function storeTambahPatenDosen(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|max:14',
            'tanggal_lahir' => 'required|date',
            'ktp_inventor' => 'required|mimes:pdf|max:2028',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required|integer',
            'data_pengaju2' => 'mimes:xlsx',
            'institusi' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'jenis_paten' => 'required',
            'judul_paten' => 'required',
            'deskripsi_paten' => 'required|mimes:pdf|max:2028',
            'abstrak_paten' => 'required|mimes:pdf|max:2028',
            'pengalihan_hak' => 'required|mimes:pdf|max:2028',
            'klaim' => 'required|mimes:pdf|max:2028',
            'pernyataan_kepemilikan' => 'required|mimes:pdf|max:2028',
            'surat_kuasa' => 'required|mimes:pdf|max:2028',
            'gambar_paten' => 'required|mimes:pdf|max:2028',
            'gambar_tampilan' => 'required|mimes:pdf|max:2028',
            'tanggal_permohonan' => 'required'
        ]);
        $paten = new Paten();
        $paten->user_id = Auth::user()->id;
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;

        if ($request->hasFile('ktp_inventor')) {
            $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        }

        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;

        if ($request->hasFile('data_pengaju2')) {
            $paten->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-paten');
        }

        $paten->institusi = $request->institusi;
        $paten->jurusan = $request->jurusan;
        $paten->prodi = $request->prodi;
        $paten->jenis_paten = $request->jenis_paten;
        $paten->judul_paten = $request->judul_paten;

        if ($request->hasFile('abstrak_paten')) {
            $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('deskripsi_paten')) {
            $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('pengalihan_hak')) {
            $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
        }

        if ($request->hasFile('klaim')) {
            $paten->klaim = $request->file('klaim')->store('dokumen-paten');
        }

        if ($request->hasFile('pernyataan_kepemilikan')) {
            $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
        }

        if ($request->hasFile('surat_kuasa')) {
            $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_paten')) {
            $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_tampilan')) {
            $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
        }

        $paten->tanggal_permohonan = $request->tanggal_permohonan;
        $paten->save($validasidata);

        return redirect('/admin/paten')->with('success', 'Data Paten Berhasil Ditambahkan');
    }

    

    public function storeTambahPatenUmum(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|max:14',
            'tanggal_lahir' => 'required|date',
            'ktp_inventor' => 'required|mimes:pdf|max:2028',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required|integer',
            'institusi' => 'required',
            'jenis_paten' => 'required',
            'judul_paten' => 'required',
            'deskripsi_paten' => 'required|mimes:pdf|max:2028',
            'abstrak_paten' => 'required|mimes:pdf|max:2028',
            'pengalihan_hak' => 'required|mimes:pdf|max:2028',
            'klaim' => 'required|mimes:pdf|max:2028',
            'pernyataan_kepemilikan' => 'required|mimes:pdf|max:2028',
            'surat_kuasa' => 'required|mimes:pdf|max:2028',
            'gambar_paten' => 'required|mimes:pdf|max:2028',
            'gambar_tampilan' => 'required|mimes:pdf|max:2028',
            'tanggal_permohonan' => 'required'
        ]);
        $paten = new Paten();
        $paten->user_id = Auth::user()->id;
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;

        if ($request->hasFile('ktp_inventor')) {
            $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        }

        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
        $paten->jenis_paten = $request->jenis_paten;
        $paten->judul_paten = $request->judul_paten;

        if ($request->hasFile('abstrak_paten')) {
            $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('deskripsi_paten')) {
            $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('pengalihan_hak')) {
            $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
        }

        if ($request->hasFile('klaim')) {
            $paten->klaim = $request->file('klaim')->store('dokumen-paten');
        }

        if ($request->hasFile('pernyataan_kepemilikan')) {
            $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
        }

        if ($request->hasFile('surat_kuasa')) {
            $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_paten')) {
            $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_tampilan')) {
            $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
        }

        $paten->tanggal_permohonan = $request->tanggal_permohonan;
        $paten->save($validasidata);
        return redirect('/admin/paten')->with('success', 'Data Paten Berhasil Ditambahkan'); 
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

    public function viewSensitifFilesPaten($filename)
    {
        // Path file di disk 'private'
        $filePaten = storage_path('app/public/umum/dokumen-paten/' . $filename);

        // Pastikan file ada
        if (!file_exists($filePaten)) {
            abort(404, 'File tidak ditemukan.');
        }

        // Cari data paten berdasarkan salah satu kolom file
        $paten = Paten::where(function ($query) use ($filename) {
            $query->where('ktp_inventor', 'umum/dokumen-paten/' . $filename)
                ->orWhere('data_pengaju2', 'umum/dokumen-paten/' . $filename)
                ->orWhere('pengalihan_hak', 'umum/dokumen-paten/' . $filename)
                ->orWhere('klaim', 'umum/dokumen-paten/' . $filename)
                ->orWhere('pernyataan_kepemilikan', 'umum/dokumen-paten/' . $filename)
                ->orWhere('surat_kuasa', 'umum/dokumen-paten/' . $filename);
        })->first();

        // Validasi akses: hanya pemilik atau admin/verifikator yang bisa melihat
        if (!$paten  || $paten->user_id !== auth()->id()) {
            abort(403, 'Anda tidak memiliki akses ke file ini.');
        }

        // Kirim file sebagai respons
        return response()->file($filePaten);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $p = Paten::find($id);
        if($p->institusi === 'Dosen'){
            return view('admin.adminpaten.editpaten.index', compact('p'));
        }else if($p->institusi === 'Umum'){
            return view('admin.adminpaten.editpaten.umum', compact('p'));
        }
    }

    public function updateData(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required|date',
            'ktp_inventor' => 'required|mimes:pdf|max:2028',
            'email' => 'required|email',
            'kewarganegaraan' => 'required|string',
            'kode_pos' => 'required|integer',
            'institusi' => 'required',
            'data_pengaju2' => 'mimes:xlsx',
            'jurusan' => 'required',
            'prodi' => 'required',
            'jenis_paten' => 'required',
            'judul_paten' => 'required|string',
            'deskripsi_paten' => 'required|mimes:pdf|max:2028',
            'abstrak_paten' => 'required|mimes:pdf|max:2028',
            'pengalihan_hak' => 'required|mimes:pdf|max:2028',
            'klaim' => 'required|mimes:pdf|max:2028',
            'pernyataan_kepemilikan' => 'required|mimes:pdf',
            'surat_kuasa' => 'required|mimes:pdf|max:2028',
            'gambar_paten' => 'required|mimes:pdf|max:2028',
            'gambar_tampilan' => 'required|mimes:pdf|max:2028',
        ]);

        $paten = Paten::find($id);

        // Mengupdate field yang tidak terkait dengan file
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
        $paten->jurusan = $request->jurusan;
        $paten->prodi = $request->prodi;
        $paten->jenis_paten = $request->jenis_paten;
        $paten->judul_paten = $request->judul_paten;
        $paten->tanggal_permohonan = $request->tanggal_permohonan;

        // Mengupdate file jika ada file baru yang diunggah
        if ($request->hasFile('ktp_inventor')) {
            // Opsional: Hapus file lama jika perlu
            if ($paten->ktp_inventor) {
                Storage::delete($paten->ktp_inventor);
            }
            $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        }

        if ($request->hasFile('data_pengaju2')) {
            if ($paten->data_pengaju2) {
                Storage::delete($paten->data_pengaju2);
            }
            $paten->data_pengaju2 = $request->file('data_pengaju2')->store('dokumen-paten');
        }

        if ($request->hasFile('abstrak_paten')) {
            if ($paten->abstrak_paten) {
                Storage::delete($paten->abstrak_paten);
            }
            $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('deskripsi_paten')) {
            if ($paten->deskripsi_paten) {
                Storage::delete($paten->deskripsi_paten);
            }
            $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('pengalihan_hak')) {
            if ($paten->pengalihan_hak) {
                Storage::delete($paten->pengalihan_hak);
            }
            $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
        }

        if ($request->hasFile('klaim')) {
            if ($paten->klaim) {
                Storage::delete($paten->klaim);
            }
            $paten->klaim = $request->file('klaim')->store('dokumen-paten');
        }

        if ($request->hasFile('pernyataan_kepemilikan')) {
            if ($paten->pernyataan_kepemilikan) {
                Storage::delete($paten->pernyataan_kepemilikan);
            }
            $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
        }

        if ($request->hasFile('surat_kuasa')) {
            if ($paten->surat_kuasa) {
                Storage::delete($paten->surat_kuasa);
            }
            $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_paten')) {
            if ($paten->gambar_paten) {
                Storage::delete($paten->gambar_paten);
            }
            $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_tampilan')) {
            if ($paten->gambar_tampilan) {
                Storage::delete($paten->gambar_tampilan);
            }
            $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
        }

        // Simpan perubahan ke database
        $paten->save($validasidata);
        return redirect('/admin/paten')->with('success','Data paten berhasil di update');
    }
    public function updateDataUmum(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required|date',
            'ktp_inventor' => 'required|mimes:pdf|max:2028',
            'email' => 'required|email',
            'kewarganegaraan' => 'required|string',
            'kode_pos' => 'required|integer',
            'institusi' => 'required',
            'jenis_paten' => 'required',
            'judul_paten' => 'required|string',
            'deskripsi_paten' => 'required|mimes:pdf|max:2028',
            'abstrak_paten' => 'required|mimes:pdf|max:2028',
            'pengalihan_hak' => 'required|mimes:pdf|max:2028',
            'klaim' => 'required|mimes:pdf|max:2028',
            'pernyataan_kepemilikan' => 'required|mimes:pdf',
            'surat_kuasa' => 'required|mimes:pdf|max:2028',
            'gambar_paten' => 'required|mimes:pdf|max:2028',
            'gambar_tampilan' => 'required|mimes:pdf|max:2028',
        ]);

        $paten = Paten::find($id);

        // Mengupdate field yang tidak terkait dengan file
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
        $paten->jenis_paten = $request->jenis_paten;
        $paten->judul_paten = $request->judul_paten;
        $paten->tanggal_permohonan = $request->tanggal_permohonan;

        // Mengupdate file jika ada file baru yang diunggah
        if ($request->hasFile('ktp_inventor')) {
            // Opsional: Hapus file lama jika perlu
            if ($paten->ktp_inventor) {
                Storage::delete($paten->ktp_inventor);
            }
            $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        }

        if ($request->hasFile('abstrak_paten')) {
            if ($paten->abstrak_paten) {
                Storage::delete($paten->abstrak_paten);
            }
            $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('deskripsi_paten')) {
            if ($paten->deskripsi_paten) {
                Storage::delete($paten->deskripsi_paten);
            }
            $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('pengalihan_hak')) {
            if ($paten->pengalihan_hak) {
                Storage::delete($paten->pengalihan_hak);
            }
            $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
        }

        if ($request->hasFile('klaim')) {
            if ($paten->klaim) {
                Storage::delete($paten->klaim);
            }
            $paten->klaim = $request->file('klaim')->store('dokumen-paten');
        }

        if ($request->hasFile('pernyataan_kepemilikan')) {
            if ($paten->pernyataan_kepemilikan) {
                Storage::delete($paten->pernyataan_kepemilikan);
            }
            $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
        }

        if ($request->hasFile('surat_kuasa')) {
            if ($paten->surat_kuasa) {
                Storage::delete($paten->surat_kuasa);
            }
            $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_paten')) {
            if ($paten->gambar_paten) {
                Storage::delete($paten->gambar_paten);
            }
            $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
        }

        if ($request->hasFile('gambar_tampilan')) {
            if ($paten->gambar_tampilan) {
                Storage::delete($paten->gambar_tampilan);
            }
            $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
        }

        // Simpan perubahan ke database
        $paten->save($validasidata);
        return redirect('/admin/paten')->with('success','Data paten berhasil di update');
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
        return redirect('/admin/paten')->with('success','Status paten berhasil di update');
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
