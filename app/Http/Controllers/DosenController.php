<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paten;
use App\Models\HakCipta;
use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)
                ->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', 'Dosen')->count();

        $hc = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)
                ->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', 'Dosen')->count();

        $di = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)
                ->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', 'Dosen')->count();

        return view('dosen.index', compact('paten', 'hc', 'di'));
    }
    public function paten()
    {
        $paten = Paten::with('cek')->where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', 'Dosen')->paginate(5);

        $pf = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Pemeriksaan Formalitas')->count();

        $mt = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Tanggapan Formalitas')->count();

        $mp = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Masa Pengumuman')->count();

        $mps = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Pembayaran Substansif')->count();

        $staw = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Awal')->count();

        $stl = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Lanjut')->count();

        $stak = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Akhir')->count();

        $mts = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Tanggapan Substansif')->count();

        $catat = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Diberi')->count();

        $tolak = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();

        $mvdov = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        return view('dosen.paten.index', compact('pf', 'paten', 'mt', 'mp', 'mps', 'staw', 'stl', 'stak', 'mts', 'catat', 'tolak', 'mvdov'));
    }
    public function cariPaten(Request $request)
    {
        $cari = $request->input('cari');
        $paten = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where(function ($query) use ($cari) {
            $query->where('judul_paten', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%");
        })->paginate(5);

        $pf = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Pemeriksaan Formalitas')->count();

        $mt = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Tanggapan Formalitas')->count();

        $mp = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Masa Pengumuman')->count();

        $mps = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Pembayaran Substansif')->count();

        $staw = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Awal')->count();

        $stl = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Lanjut')->count();

        $stak = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Substansif Tahap Akhir')->count();

        $mts = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Tanggapan Substansif')->count();

        $catat = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Diberi')->count();

        $tolak = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();

        $mvdov = Paten::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();
        return view('dosen.paten.index', compact('pf', 'mt', 'mp', 'mps', 'staw', 'stl', 'stak', 'mts', 'catat', 'tolak', 'paten', 'mvdov'));
    }

    public function hakCipta()
    {
        $tolak = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();

        $tercatat = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Tercatat')->count();

        $null = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Keterangan belum lengkap')->count();

        $hc = HakCipta::with('cekhc')
            ->where(function ($query) {
                $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
            })->where('institusi', auth()->user()->role)->paginate(5);

        $mvdov = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        return view('dosen.hakcipta.index', compact('hc', 'tercatat', 'null', 'tolak', 'mvdov'));
    }
    public function cariHc(Request $request)
    {
        $cari = $request->input('cari');

        $hc = HakCipta::where(function ($query) {
            // Pengelompokan kondisi user_id atau nama_lengkap
            $query->where('user_id', Auth::user()->id)
                ->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where(function ($query) use ($cari) {
            $query->where('judul_ciptaan', 'LIKE', "%" . $cari . "%")
                ->orWhere('status', 'LIKE', "%" . $cari . "%");
        })->paginate(5);

        $tolak = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)
                ->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();

        $tercatat = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Tercatat')->count();

        $null = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Keterangan belum lengkap')->count();

        $mvdov = HakCipta::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();


        return view('dosen.hakcipta.index', compact('hc', 'tercatat', 'null', 'tolak', 'mvdov'));
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
        $di = DesainIndustri::with('cekDi')->where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', auth()->user()->role)->paginate(5);

        $desainDi = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Diberi')->count();
        $desainDK = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();
        $desainP = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Pemeriksaan Formalitas')->count();
        $desainKBL = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Keterangan Belum Lengkap')->count();
        $desainDPU = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Dalam Proses Usulan')->count();
        $mvdov = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        return view('dosen.desainindustri.index', compact('desainDi', 'desainP', 'desainDPU', 'desainKBL', 'desainDK' , 'mvdov', 'di'));
    }
    public function cariDi(Request $request)
    {
        $cari = $request->input('cari');

        $di = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where(function ($query) use ($cari) {
            $query->where('judul_di', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%");
        })->paginate(5);

        $desainDi = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Diberi')->count();
        $desainDK = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Ditolak')->count();
        $desainP = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Pemeriksaan Formalitas')->count();
        $desainKBL = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Keterangan Belum Lengkap')->count();
        $desainDPU = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Dalam Proses Usulan')->count();
        $mvdov = DesainIndustri::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('nama_lengkap', Auth::user()->nama_lengkap);
        })->where('institusi', Auth::user()->role)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->count();

        return view('dosen.desainindustri.index', compact('desainDi', 'desainP', 'desainDPU', 'desainKBL', 'desainDK', 'di', 'mvdov'));
    }
    public function pengajuanDi()
    {
        return view('dosen.desainindustri.pengajuan.index');
    }
    public function lihatDi(string $id)
    {
        $di = DesainIndustri::with('cekDi')->find($id);


        return view('dosen.desainindustri.lihat.index', compact('di'));
    }
    public function hapusPaten(string $id)
    {
        Paten::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function lihatPaten(string $id)
    {
        $paten = Paten::with('cek')->find($id);
        return view('dosen.paten.lihat.index', compact('paten'));
    }
    public function editPaten(string $id)
    {
        $p = Paten::find($id);
        // echo Storage::get($p->ktp_inventor);


        return view('dosen.paten.edit.index', compact('p'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function storePaten(Request $request)
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


        return redirect('/dosen/pengajuan/paten')->with('success', 'Data Paten berhasil Disimpan!');
    }
    public function updatePaten(Request $request, string $id)
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
        $paten->user_id = Auth::user()->id;

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


        return redirect('/dosen/paten')->with('success', 'Data paten berhasil di update');
    }
    public function lihatHc(string $id)
    {
        $hc = HakCipta::with('cekhc')->find($id);
        return view('dosen.hakcipta.lihat.index', compact('hc'));
    }
    public function editHc(string $id)
    {
        $hc = HakCipta::find($id);
        return view('dosen.hakcipta.edit.index', compact('hc'));
    }
    public function updateHc(Request $request, string $id)
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
        $hc->user_id = Auth::user()->id;
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


        return redirect('/dosen/hak-cipta')->with('success', 'Data hak cipta berhasil di update');
    }
    public function storeHc(Request $request)
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

        return redirect('/dosen/hak-cipta/pengajuan')->with('success', 'Data hak cipta berhasil Disimpan!');
    }
    public function editDi(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('dosen.desainindustri.edit.index', compact('di'));
    }
    public function updateDi(Request $request, string $id)
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

        return redirect('/dosen/desain-industri')->with('success', 'Data desain industri berhasil Diupdate!');
    }
    public function storeDi(Request $request)
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

        return redirect('/dosen/desain-industri/pengajuan')->with('success', 'Data desain industri berhasil Disimpan!');
    }

    public function lihatProfil()
    {
        return view('dosen.profil.index');
    }
    public function editProfil(string $id)
    {
        $user = User::find($id);
        // dd($user->ktp);

        return view('dosen.profil.edit.index', compact('user'));
    }
    public function updateProfil(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'email' => 'required|email',
            'username' => 'required|min:3',
        ]);
        $user = User::find($id);
        $user->nama_lengkap = $request->nama_lengkap;
        $user->no_telepon = $request->no_telepon;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->nip = $request->nip;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save($validasidata);
        return redirect('/dosen/user/lihat/')->with('success', 'Data berhasil Diupdate!');
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
