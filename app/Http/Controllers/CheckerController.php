<?php

namespace App\Http\Controllers;

use App\Models\CheckDi;
use App\Models\DesainIndustri;
use App\Models\Paten;
use App\Models\Checker;
use App\Models\CheckHc;
use App\Models\CheckPaten;
use App\Models\HakCipta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Relations\HasOne;

class CheckerController extends Controller
{
    public function dashboard()
    {
        $paten = Paten::all()->count();
        $hc = HakCipta::all()->count();
        $di = DesainIndustri::all()->count();
        return view('checker.dashboard.index', compact('paten', 'hc', 'di'));
    }
    public function loginChecker()
    {
        return view('checker.login.index');
    }
    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/verifikator/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');
    }
    public function lamanPaten()
    {
        // $paten = Paten::join('check_paten', 'paten.id', '=', 'check_paten.id')->select('paten_id','nama_lengkap', 'jenis_paten', 'judul_paten', 'tanggal_permohonan', 'status', 'cek_data', 'keterangan')->get();
        $paten = Paten::with('cek')->paginate(5);

        // dd($paten);

        return view('checker.cekpaten.index', compact('paten'));
    }
    public function cariPaten(Request $request)
    {
        $cari = $cari = $request->input('cari');
        $paten = Paten::with('cek')->where('judul_paten', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5);
        return view('checker.cekpaten.index', compact('paten'));
    }
    public function cekPaten(string $id)
    {
        $paten = Paten::with('cek')->find($id);
        return view('checker.cekpaten.lihat.index', compact('paten'));
    }
    public function cek(string $id)
    {
        $paten = CheckPaten::find($id);
        if($paten != null){
            return back()->with('warning', 'Data Paten Sudah diverifikasi, Silahkan Update Data Jikalau Ada Perubahan');
        }
        return view('checker.cekpaten.nilai.index');
    }
    public function simpanCek(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = new CheckPaten();
        $cek->paten_id = $id;
        $cek->cek_data = $request->cek_data;
        $cek->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/verifikator/cek/paten')->with('success', 'Data Paten berhasil diverifikasi!');
    }
    public function lamanupdatePaten(string $id)
    {
        $paten = CheckPaten::find($id);
        if ($paten === null) {
            return back()->with('warning', 'Data Paten Belum diverifikasi, Silahkan Verifikasi Terlebih Dahulu');
        }
        else{
            return view('checker.cekpaten.update.index', compact('paten'));
        }
    }
    public function updateCekPaten(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = CheckPaten::find($id);
        $cek->paten_id = $id;
        $cek->cek_data = $request->cek_data;
        $cek->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/verifikator/cek/paten')->with('success', 'verifikasi Data Paten Berhasil diupdate!');
    }

    public function lamanHc()
    {
        $hc = HakCipta::with('cekHc')->paginate(5);
        return view('checker.cekhc.index', compact('hc'));
    }
    public function cekHc(string $id)
    {
        $hc = HakCipta::with('cekHc')->find($id);
        return view('checker.cekhc.lihat.index', compact('hc'));
    }
    public function cariHc(Request $request)
    {
        $cari = $request->input('cari');
        $hc = HakCipta::with('cekhc')->where('judul_ciptaan', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5);
        return view('checker.cekhc.index', compact('hc'));
    }
    public function lamanCekHc(string $id)
    {
        $hc = CheckHc::find($id);
        if($hc != null){
            return back()->with('warning', 'Data Hak Cipta Sudah diverifikasi, Silahkan Update Data Jikalau Ada Perubahan');
        }
        else{
            return view('checker.cekhc.nilai.index');
        }
    }
    public function simpanCekHc(Request $request, string $id)
    {   
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = new CheckHc();
        $cek->hak_cipta_id = $id;
        $cek->cek_data = $request->cek_data;
        $cek->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/verifikator/cek/hak-cipta')->with('success', 'Data Hak Cipta Berhasil diverifikasi!');
    }
    public function lamanUpdateCekhc(string $id)
    {
        $hc = CheckHc::find($id);
        
        if ($hc === null) {
            return back()->with('warning', 'Data Hak Cipta Belum diverifikasi, Silahkan verifikasi Terlebih Dahulu');
        }
        else{
            return view('checker.cekhc.update.index', compact('hc'));
        }
    }
    public function updateCekHc(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = CheckHc::find($id);
        $cek->hak_cipta_id = $id;
        $cek->cek_data = $request->cek_data;
        $cek->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/verifikator/cek/hak-cipta')->with('success', 'verifikasi Hak Cipta Berhasil diupdate!');
    }
    public function lamanDi()
    {
        $di = DesainIndustri::with('cekDi')->paginate(5);
        return view('checker.cekdi.index', compact('di'));
    }
    public function cariDi(Request $request)
    {
        $cari = $cari = $request->input('cari');
        $di = DesainIndustri::with('cekDi')->where('judul_di', 'LIKE', "%" . $cari . "%")->orWhere('nama_lengkap', 'LIKE', "%" . $cari . "%")->orWhere('status', 'LIKE', "%" . $cari . "%")->paginate(5);
        return view('checker.cekdi.index', compact('di'));
    }
    public function cekDi(string $id)
    {
        $di = DesainIndustri::with('cekDi')->find($id);
        return view('checker.cekdi.lihat.index', compact('di'));
    }
    public function lamanCekDi(string $id)
    {
        $di = CheckDi::find($id);
        if($di != null){
            return back()->with('warning', 'Data Desain Industri Sudah diverifikasi, Silahkan Update Data Jikalau Ada Perubahan');
        }
        else{

            return view('checker.cekdi.nilai.index');
        }
    }

    public function simpanCekDi(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = new CheckDi();
        $cek->desain_industri_id = $id;
        $cek->cek_data = $request->cek_data;
        $cek->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/verifikator/cek/desain-industri')->with('success', 'Data Desain industri berhasil diverifikasi!');
    }
    public function updateCekDi(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);
        $updatedi = CheckDi::find($id);
        $updatedi->desain_industri_id = $id;
        $updatedi->cek_data = $request->cek_data;
        $updatedi->keterangan = $request->keterangan;
        $updatedi->save($validasi);
        return redirect('/verifikator/cek/desain-industri')->with('success', 'Verifikasi Desain Industri Berhasil diupdate!');
    }
    public function lamanUpdateCekDi(string $id)
    {
        $di = CheckDi::find($id);
        if ($di === null) {
            return back()->with('warning', 'Data Desain Industri Belum diverifikasi, Silahkan VerifikasiTerlebih Dahulu');
        }
        else{ 
            return view('checker.cekdi.update.index', compact('di'));
        }
    }
    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login/verifikator');
    }
}
