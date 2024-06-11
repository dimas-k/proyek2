<?php

namespace App\Http\Controllers;

use App\Models\Paten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $paten1 = Paten::latest()->paginate(5);
        $carijudul = $request->get('cari_judul');
        $carinama = $request->get('cari_nama');

        $hitung = Paten:: all()->count();
        
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->count();
        $mp = Paten::where('status', 'Masa pengumuman')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->count();
        $catat = Paten::where('status', 'Diberi')->count();
        $tolak = Paten::where('status', 'Ditolak')->count();

        $paten = Paten::where('institusi')->count();
        $patenPF = Paten::where('status', 'Pemeriksaan formalitas')->count();
        $patenMTF = Paten::where('status', 'Menunggu tanggapan formalitas')->count();
        $patenMP = Paten::where('status', 'Masa pengumuman')->count();
        $patenMPS = Paten::where('status', 'Menunggu pembayaran substansif')->count();
        $patenSTAW = Paten::where('status', 'Substansif tahap awal')->count();
        $patenSTL = Paten::where('status', 'Substansif tahap lanjut')->count();
        $patenSTAK = Paten::where('status', 'Substansif tahap akhir')->count();
        $patenMTS = Paten::where('status', 'Menunggu tanggapan substansif')->count();
        $patenDI = Paten::where('status', 'Diberi')->count();
        $patenDK = Paten::where('status', 'Ditolak')->count();
        
        $patenTahun = Paten::whereYear('tanggal_permohonan','2024')->count();
        
        return view('umum-page.paten.index', compact('pf', 'paten1','paten','mt','mp','mps','staw','stl','stak','mts','catat','tolak','hitung','patenPF','patenMTF','patenMP','patenMPS','patenSTAW','patenSTL','patenSTL','patenSTAK','patenMTS','patenDI','patenDK','patenTahun'));
    }

    public function cari(Request $request){
        $carijudul = $request->input('cari_judul');
        $carinama = $request->input('cari_nama');
        $paten = Paten::where('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //yang bener
        // $paten = DB::table('paten')->whereRaw('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //penggunaan raw queri

        $hitung = Paten:: all()->count();
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->count();
        $mp = Paten::where('status', 'Masa pengumuman')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->count();
        $catat = Paten::where('status', 'Diberi')->count();
        $tolak = Paten::where('status', 'Ditolak')->count();

        return view('umum-page.paten.index', compact('paten','pf','mt','mp','mps','staw','stl','stak','mts','catat','tolak','hitung'));
    }

    public function pemeriksaanFormalitas()
    {
        $cek = Paten::latest()->where('status', 'Pemeriksaan Formalitas')->get();
        return view('patenpf.index', compact('cek'));
    }

    public function menungguTanggapan()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Tanggapan Formalitas')->get();
        return view('patenmt.index', compact('cek'));
    }

    public function masaPengumuman()
    {
        $cek = Paten::latest()->where('status', 'Masa Pengumuman')->get();
        return view('paten-mp.index', compact('cek'));
    }

    public function pembayaranSubstansif()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Pembayaran Substansif')->get();
        return view('paten-mps.index', compact('cek'));
    }

    public function substansifAwal()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Awal')->get();
        return view('paten-staw.index', compact('cek'));
    }

    public function substansifLanjut()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Lanjut')->get();
        return view('paten-stl.index', compact('cek'));
    }
    public function substansifAkhir()
    {
        $cek = Paten::latest()->where('status', 'Substansif Tahap Akhir')->get();
        return view('paten-stak.index', compact('cek'));
    }
    public function mengungguTanggapanSubstansif()
    {
        $cek = Paten::latest()->where('status', 'Menunggu Tanggapan Substansif')->get();
        return view('paten-mts.index', compact('cek'));
    }
    public function diberi()
    {
        $cek = Paten::latest()->where('status', 'Diberi')->get();
        return view('paten-beri.index', compact('cek'));
    }
    public function ditolak()
    {
        $cek = Paten::latest()->where('status', 'Ditolak')->get();
        return view('paten-tlk.index', compact('cek'));
    }
    public function showPengajuan()
    {
        return view ('p-paten.index');
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
        $validasidata = $request->validate([
            'nama_lengkap'=> 'required',
            'alamat'=> 'required',
            'no_telepon'=> 'required',
            'tanggal_lahir'=> 'required',
            'ktp_inventor'=> 'required|mimes:pdf',
            'email'=> 'required|email.dns',
            'kewarganegaraan'=> 'required',
            'kode_pos'=> 'required|integer',
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
        
        return redirect('/pengajuan-paten')->with('success', 'Data Paten berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paten = Paten::find($id);
        return view('patenshow.index', compact('paten'));
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
