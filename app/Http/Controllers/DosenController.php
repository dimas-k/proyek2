<?php

namespace App\Http\Controllers;

use App\Models\DesainIndustri;
use App\Models\HakCipta;
use App\Models\Paten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::where('institusi', 'Dosen')->count();
        $hc = HakCipta::where('institusi', 'Dosen')->count();
        $di = DesainIndustri::where('institusi', 'Dosen')->count();
        //HakCipta
        $hcTolak = HakCipta::where('status', 'Ditolak')->where('user_id', Auth::user()->id)->count();
        $hcTerima = HakCipta::where('status', 'Diterima')->where('user_id', Auth::user()->id)->count();
        $hcKet = HakCipta::where('status', 'Keterangan belum lengkap')->where('user_id', Auth::user()->id)->count();
        //Paten
        $patenPF = Paten::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan formalitas')->count();
        $patenMTF = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu tanggapan formalitas')->count();
        $patenMP = Paten::where('user_id', Auth::user()->id)->where('status', 'Masa pengumuman')->count();
        $patenMPS = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu pembayaran substansif')->count();
        $patenSTAW = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif tahap awal')->count();
        $patenSTL = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif tahap lanjut')->count();
        $patenSTAK = Paten::where('user_id', Auth::user()->id)->where('status', 'Substansif tahap akhir')->count();
        $patenMTS = Paten::where('user_id', Auth::user()->id)->where('status', 'Menunggu tanggapan substansif')->count();
        $patenDI = Paten::where('user_id', Auth::user()->id)->where('status', 'Diberi')->count();
        $patenDK = Paten::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->count();
        //Desain Industri
        $desainDi = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Diberi')->count();
        $desainDK = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->count();
        $desainP = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan')->count();
        $desainKBL = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Keterangan belum lengkap')->count();
        $desainDPU = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Dalam proses usulan')->count();

        return view('dosen.index', compact('paten','hc','di', 'hcTolak', 'hcKet', 'hcTerima','patenPF','patenMTF','patenMP','patenMPS','patenSTAW','patenSTL','patenSTL','patenSTAK','patenMTS','patenDI','patenDK','desainDi','desainDK','desainP','desainKBL','desainDPU'));
    }
    public function paten()
    {
        $paten = Paten::where('institusi', 'Dosen')->paginate(5);
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->where('institusi', 'Dosen')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->where('institusi', 'Dosen')->count();
        $mp = Paten::where('status', 'Masa pengumuman')->where('institusi', 'Dosen')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->where('institusi', 'Dosen')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->where('institusi', 'Dosen')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->where('institusi', 'Dosen')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->where('institusi', 'Dosen')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->where('institusi', 'Dosen')->count();
        $catat = Paten::where('status', 'Diberi')->where('institusi', 'Dosen')->count();
        $tolak = Paten::where('status', 'Ditolak')->where('institusi', 'Dosen')->count();
        return view('dosen.paten.index', compact('pf', 'paten','mt','mp','mps','staw','stl','stak','mts','catat','tolak'));
    }
    public function cariPaten(Request $request){
        $cari = $request->input('cari');
        $paten = Paten::where('judul_paten','LIKE',"%".$cari."%")->orWhere('nama_lengkap','LIKE',"%".$cari."%")->orWhere('status','LIKE',"%".$cari."%")->paginate(5); //yang bener
        // $paten = DB::table('paten')->whereRaw('judul_paten','LIKE',"%".$carijudul."%")->orWhere('nama_lengkap','LIKE',"%".$carinama."%")->paginate(5); //penggunaan raw queri
        // dd($cpaten);
        // $paten = Paten::where('institusi', 'Dosen')->get();
        $pf = Paten::where('status', 'Pemeriksaan Formalitas')->where('institusi', 'Dosen')->count();
        $mt = Paten::where('status', 'Menunggu Tanggapan Formalitas')->where('institusi', 'Dosen')->count();                                                      
        $mp = Paten::where('status', 'Masa pengumuman')->where('institusi', 'Dosen')->count();
        $mps = Paten::where('status', 'Menunggu Pembayaran Substansif')->where('institusi', 'Dosen')->count();
        $staw = Paten::where('status', 'Substansif Tahap Awal')->where('institusi', 'Dosen')->count();
        $stl = Paten::where('status', 'Substansif Tahap Lanjut')->where('institusi', 'Dosen')->count();
        $stak = Paten::where('status', 'Substansif Tahap Akhir')->where('institusi', 'Dosen')->count();
        $mts = Paten::where('status', 'Menunggu Tanggapan Substansif')->where('institusi', 'Dosen')->count();
        $catat = Paten::where('status', 'Diberi')->where('institusi', 'Dosen')->count();
        $tolak = Paten::where('status', 'Ditolak')->where('institusi', 'Dosen')->count();
        return view('dosen.paten.index', compact('pf','mt','mp','mps','staw','stl','stak','mts','catat','tolak','paten'));
    }
    
    public function hakCipta()
    {
        $hcTolak = HakCipta::where('status', 'Ditolak')->where('user_id', Auth::user()->id)->count();
        $hcTerima = HakCipta::where('status', 'Diterima')->where('user_id', Auth::user()->id)->count();
        $hcKet = HakCipta::where('status', 'Keterangan belum lengkap')->where('user_id', Auth::user()->id)->count();
        $hc = HakCipta::where('institusi', 'Dosen')->get();
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
        $desainDi = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Diberi')->count();
        $desainDK = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Ditolak')->count();
        $desainP = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Pemeriksaan')->count();
        $desainKBL = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Keterangan belum lengkap')->count();
        $desainDPU = DesainIndustri::where('user_id', Auth::user()->id)->where('status', 'Dalam proses usulan')->count();
        $di = DesainIndustri::where('institusi', 'Dosen')->get();
        return view('dosen.desainindustri.index', compact('di'));
    }
    public function pengajuanDi()
    {
        return view('dosen.desainindustri.pengajuan.index');
    }
    public function lihatDi(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('dosen.desainindustri.lihat.index', compact('di'));
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
    public function editPaten(string $id)
    {
        $paten = Paten::find($id);
        return view('dosen.paten.edit.index', compact('paten'));
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
            'jurusan'=> 'required',
            'prodi'=> 'required',
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
        $paten->jurusan = $request->jurusan;
        $paten->prodi = $request->prodi;
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
    public function updatePaten(Request $request, string $id)
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
            'jurusan'=> 'required',
            'prodi'=> 'required',
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
        $paten = Paten::find($id);
        $paten->nama_lengkap = $request->nama_lengkap;
        $paten->alamat = $request->alamat;
        $paten->no_telepon = $request->no_telepon;
        $paten->tanggal_lahir = $request->tanggal_lahir;
        $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
        $paten->email = $request->email;
        $paten->kewarganegaraan = $request->kewarganegaraan;
        $paten->kode_pos = $request->kode_pos;
        $paten->institusi = $request->institusi;
        $paten->jurusan = $request->jurusan;
        $paten->prodi = $request->prodi;
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

        return redirect('/dosen/paten')->with('success', 'Data paten berhasil di update');
    }
    public function lihatHc(string $id)
    {
        $hc = HakCipta::find($id);
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

        $hc = HakCipta::find($id);
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

        return redirect('/dosen/hak-cipta')->with('success', 'Data hak cipta berhasil di update');
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
            'jurusan'=> 'required',
            'prodi'=> 'required',
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
        $hc->jurusan = $request->jurusan; 
        $hc->prodi = $request->prodi;
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
    public function editDi(string $id)
    {
        $di = DesainIndustri::find($id);
        return view('dosen.desainindustri.edit.index', compact('di'));
    }
    public function updateDi(Request $request, string $id)
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
        $di = DesainIndustri::find($id);
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

        return redirect('/dosen/desain-industri')->with('success', 'Data desain industri berhasil Diupdate!');
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
            'jurusan'=> 'required',
            'prodi'=> 'required',
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
        $di->jurusan = $request->jurusan; 
        $di->prodi = $request->prodi;
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
