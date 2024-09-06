<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paten;
use App\Models\HakCipta;
use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::where('user_id', Auth::user()->id)->where('institusi', 'Umum')->count();
        $hc = HakCipta::where('user_id', Auth::user()->id)->where('institusi', 'Umum')->count();
        $di = DesainIndustri::where('user_id', Auth::user()->id)->where('institusi', 'Umum')->count();;
        return view('umum.index', compact('paten', 'hc', 'di'));
    }
    public function paten()
    {
        $paten = Paten::with('cek')->where('user_id', Auth::user()->id)->where('institusi', 'Umum')->get();
        $pf = Paten::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan Formalitas')->where('institusi', 'Umum')->count();
        $mt = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Tanggapan Formalitas')->where('institusi', 'Umum')->count();
        $mp = Paten::where('user_id', Auth::user()->id)->where('status', 'Masa pengumuman')->where('institusi', 'Umum')->count();
        $mps = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Pembayaran Substansif')->where('institusi', 'Umum')->count();
        $staw = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Awal')->where('institusi', 'Umum')->count();
        $stl = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Lanjut')->where('institusi', 'Umum')->count();
        $stak = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Akhir')->where('institusi', 'Umum')->count();
        $mts = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Tanggapan Substansif')->where('institusi', 'Umum')->count();
        $catat = Paten::where('user_id', Auth::user()->id)->where('status', 'Diberi')->where('institusi', 'Umum')->count();
        $tolak = Paten::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Umum')->count();
        $mvdov = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->where('institusi', 'Dosen')->count();
        return view('umum.paten.index', compact('pf', 'paten', 'mt', 'mp', 'mps', 'staw', 'stl', 'stak', 'mts', 'catat', 'tolak','mvdov'));
    }
    public function cariPaten(Request $request)
    {
        $cari = $request->input('cari');
        $paten = Paten::with('cek')->where('user_id', Auth::user()->id)->where('judul_paten', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5); //yang bener
        // $paten = DB::table('paten')->whereRaw('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //penggunaan raw queri
        // dd($cpaten);
        // $paten = Paten::where('institusi', 'Dosen')->get();
        $pf = Paten::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan Formalitas')->where('institusi', 'Umum')->count();
        $mt = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Tanggapan Formalitas')->where('institusi', 'Umum')->count();
        $mp = Paten::where('user_id', Auth::user()->id)->where('status', 'Masa pengumuman')->where('institusi', 'Umum')->count();
        $mps = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Pembayaran Substansif')->where('institusi', 'Umum')->count();
        $staw = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Awal')->where('institusi', 'Umum')->count();
        $stl = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Lanjut')->where('institusi', 'Umum')->count();
        $stak = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif Tahap Akhir')->where('institusi', 'Umum')->count();
        $mts = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Tanggapan Substansif')->where('institusi', 'Umum')->count();
        $catat = Paten::where('user_id', Auth::user()->id)->where('status', 'Diberi')->where('institusi', 'Umum')->count();
        $tolak = Paten::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Umum')->count();
        $mvdov = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->where('institusi', 'Dosen')->count();
        return view('umum.paten.index', compact('pf', 'mt', 'mp', 'mps', 'staw', 'stl', 'stak', 'mts', 'catat', 'tolak', 'paten','mvdov'));
    }
    public function hakCipta()
    {
        $hc = HakCipta::with('cekhc')->where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('institusi', 'Umum')->get();
        $tercatat = HakCipta::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Tercatat')->where('institusi', 'Umum')->count();
        $null = HakCipta::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Keterangan Belum Lengkap')->where('institusi', 'Umum')->count();
        $tolak = HakCipta::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Umum')->count();
        $mvdov = HakCipta::where('user_id', Auth::user()->id)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->where('institusi', 'Umum')->count();
        return view('umum.hakcipta.index', compact('hc', 'tercatat', 'null', 'tolak','mvdov'));
    }
    public function cariHc(Request $request)
    {
        $cari = $request->input('cari');
        $hc = HakCipta::with('cekhc')->where('user_id', Auth::user()->id)->where('judul_ciptaan', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5); //yang bener
        // $paten = DB::table('paten')->whereRaw('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //penggunaan raw queri
        // dd($cpaten);
        // $paten = Paten::where('institusi', 'Dosen')->get();
        $tercatat = HakCipta::where('user_id', Auth::user()->id)->where('status', 'Tercatat')->where('institusi', 'Umum')->count();
        $null = HakCipta::where('user_id', Auth::user()->id)->where('status', 'Keterangan Belum Lengkap')->where('institusi', 'Umum')->count();
        $tolak = HakCipta::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Umum')->count();
        $mvdov = HakCipta::where('user_id', Auth::user()->id)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->where('institusi', 'Dosen')->count();
        return view('umum.hakcipta.index', compact('hc', 'tercatat', 'null', 'tolak','mvdov'));
    }
    public function desainIndustri()
    {
        $di = DesainIndustri::with('cekDi')->where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('institusi', 'Umum')->get();
        $beri = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Diberi')->where('institusi', 'Umum')->count();
        $proses = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Dalam Proses Usulan')->where('institusi', 'Umum')->count();
        $priksa = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan')->where('institusi', 'Umum')->count();
        $null = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Keterangan Belum Lengkap')->where('institusi', 'Umum')->count();
        $tolak = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Umum')->count();
        $mvdov = DesainIndustri::where('user_id', Auth::user()->id)->where('user_id', Auth::user()->id)->where('status', 'Menunggu Verifikasi Data Oleh Verifikator')->where('institusi', 'Umum')->count();
        return view('umum.desainindustri.index', compact('di', 'priksa', 'proses', 'null', 'tolak', 'beri','mvdov'));
    }
    public function cariDi(Request $request)
    {
        $cari = $request->input('cari');
        $di = DesainIndustri::where('user_id', Auth::user()->id)->where('judul_di', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5); //yang bener
        // $paten = DB::table('paten')->whereRaw('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //penggunaan raw queri
        // dd($cpaten);
        // $paten = Paten::where('institusi', 'Dosen')->get();
        $beri = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Diberi')->where('institusi', 'Dosen')->count();
        $proses = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Dalam Proses Usulan')->where('institusi', 'Dosen')->count();
        $priksa = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan')->where('institusi', 'Dosen')->count();
        $null = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Keterangan Belum Lengkap')->where('institusi', 'Dosen')->count();
        $tolak = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->where('institusi', 'Dosen')->count();
        return view('umum.desainindustri.index', compact('di', 'priksa', 'proses', 'null', 'tolak', 'beri'));
    }
    public function lihatDi(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('umum.desainindustri.lihat.index', compact('di'));
    }
    public function editDi(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('umum.desainindustri.edit.index', compact('di'));
    }
    public function hapusDi(string $id)
    {
        DesainIndustri::findOrFail($id)->delete();
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function pengajuanPaten()
    {
        return view('umum.paten.pengajuan.index');
    }
    public function lihatPaten(string $id)
    {
        $paten = Paten::find($id);
        return view('umum.paten.lihat.index', compact('paten'));
    }
    public function editPaten(string $id)
    {
        $paten = Paten::find($id);
        return view('umum.paten.edit.index', compact('paten'));
    }
    public function hapusPaten(string $id)
    {
        Paten::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function updatePaten(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_lahir' => 'required',
            'ktp_inventor' => 'required|mimes:pdf',
            'email' => 'required|email',
            'kewarganegaraan' => 'required',
            'kode_pos' => 'required|integer',
            'institusi' => 'required',
            'jenis_paten' => 'required',
            'judul_paten' => 'required',
            'deskripsi_paten' => 'required|mimes:pdf|max:2028',
            'abstrak_paten' => 'required|mimes:pdf|max:2028',
            'pengalihan_hak' => 'required|mimes:pdf|max:2028',
            'klaim' => 'required|mimes:pdf',
            'pernyataan_kepemilikan' => 'required|mimes:pdf',
            'surat_kuasa' => 'required|mimes:pdf',
            'gambar_paten' => 'required|mimes:pdf',
            'gambar_tampilan' => 'required|mimes:pdf'
        ]);
        $paten = Paten::find($id);
        $paten->user_id = Auth::user()->id;
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
        $paten->jenis_paten = $request->jenis_paten;
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

        return redirect('/umum/paten')->with('success', 'Data paten berhasil di update');
    }

    public function pengajuanHc()
    {
        return view('umum.hakcipta.pengajuan.index');
    }
    public function pengajuanDi()
    {
        return view('umum.desainindustri.pengajuan.index');
    }
    public function lihatHc(string $id)
    {
        $hc = HakCipta::find($id);
        return view('umum.hakcipta.lihat.index', compact('hc'));
    }
    public function hapusHc(string $id)
    {
        HakCipta::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function editHc(string $id)
    {
        $hc = HakCipta::find($id);
        return view('umum.hakcipta.edit.index', compact('hc'));
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

        return redirect('/umum/desain-industri')->with('success', 'Data desain industri berhasil Diupdate!');
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
        $hc->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-hc');
        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);

        return redirect('/umum/hak-cipta')->with('success', 'Data hak cipta berhasil di update');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpanPaten(Request $request)
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

        return redirect('/umum/pengajuan/paten')->with('success', 'Data Paten berhasil Disimpan!');
    }

    public function simpanHc(Request $request)
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
        $hc->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-hc');
        $hc->email = $request->email;
        $hc->kewarganegaraan = $request->kewarganegaraan;
        $hc->kode_pos = $request->kode_pos;
        $hc->institusi = $request->institusi;
        $hc->jenis_ciptaan = $request->jenis_ciptaan;
        $hc->judul_ciptaan = $request->judul_ciptaan;
        $hc->uraian_singkat = $request->uraian_singkat;
        $hc->dokumen_invensi = $request->file('dokumen_invensi')->store('dokumen-hc');
        $hc->surat_pengalihan = $request->file('surat_pengalihan')->store('dokumen-hc');
        $hc->surat_pernyataan = $request->file('surat_pernyataan')->store('dokumen-hc');
        $hc->tanggal_permohonan = $request->tanggal_permohonan;
        $hc->save($validasidata);

        return redirect('/umum/hak-cipta/pengajuan')->with('success', 'Data hak cipta berhasil Disimpan!');
    }
    public function simpanDi(Request $request)
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

        return redirect('/umum/desain-industri/pengajuan')->with('success', 'Data desain industri berhasil Disimpan!');
    }

    public function lihatProfil()
    {
        return view('umum.profil.index');
    }
    public function editProfil(string $id)
    {
        $user = User::find($id);
        // dd($user->ktp);

        return view('umum.profil.edit.index', compact('user'));
    }
    public function updateProfil(Request $request, string $id)
    {
        $validasidata = $request->validate([
            'email' => 'required|email',
            'username' => 'required|min:3',
            'ktp' => 'required|mimes:pdf|max:2028',
        ]);
        $user = User::find($id);
        $user->nama_lengkap = $request->nama_lengkap;
        $user->no_telepon = $request->no_telepon;
        $user->email = $request->email;
        $user->alamat = $request->alamat;

        
        $user->ktp = $request->file('ktp')->store('dokumen_user');
        $user->kerjaan = $request->kerjaan;
        $user->username = $request->username;
        $user->save($validasidata);
        return redirect('/umum/user/lihat')->with('success', 'Data berhasil Diupdate!');
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
