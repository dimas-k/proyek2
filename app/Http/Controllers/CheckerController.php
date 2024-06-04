<?php

namespace App\Http\Controllers;

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
        return view('checker.dashboard.index');
    }
    public function loginChecker()
    {
        return view('checker.login.index'); 
    }
    public function autentikasi(Request $request)
    {
        $credentials = $request-> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/checker/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');
    }
    public function lamanPaten()
    {
        // $paten = Paten::join('check_paten', 'paten.id', '=', 'check_paten.id')->select('paten_id','nama_lengkap', 'jenis_paten', 'judul_paten', 'tanggal_permohonan', 'status', 'cek_data', 'keterangan')->get();
        // $paten = CheckPaten::join('paten','check_paten.id', '=', 'paten.id')->select('paten_id','nama_lengkap', 'jenis_paten', 'judul_paten', 'tanggal_permohonan', 'status', 'cek_data', 'keterangan')->get();
        $paten = Paten::with('cek')->paginate(5);
        
        // dd($paten);
        
        return view('checker.cekpaten.index', compact('paten'));
    }
    public function cekPaten(string $id)
    {
        $paten = Paten::with('cek')->find($id);
        return view('checker.cekpaten.lihat.index', compact('paten'));

    }
    public function cek()
    {
        return view ('checker.cekpaten.nilai.index');
    }
    public function simpanCek(Request $request, string $id)
    {
        $validasi = $request->validate([
            'cek_data' => 'required',
            'keterangan' => 'required'
        ]);

        $cek = new CheckPaten();
        $cek->paten_id = $id;
        $cek ->cek_data = $request->cek_data;
        $cek ->keterangan = $request->keterangan;
        $cek->save($validasi);

        return redirect('/checker/cek/paten')->with('success', 'Data Paten berhasil dinilai!');
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
    public function lamanCekHc()
    {
        return view('');
    }
    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login/checker');
    }
}
