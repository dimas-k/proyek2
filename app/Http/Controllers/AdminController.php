<?php

namespace App\Http\Controllers;
use App\Models\Paten;

use App\Models\HakCipta;
use Illuminate\Http\Request;
use App\Models\DesainIndustri;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.loginadmin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request-> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // dd($request);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');

    }
    public function dashboardAdmin()
    {
        $paten = Paten::all();
        $hc = HakCipta::all();
        $di = DesainIndustri::all();
        return view('admin.dashboard.index', compact('paten','hc','di'));
    }

    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login-admin');
    }

    public function dashboard()
    {
        $admin = User::all();
        return view('admin.index', compact('admin'));
    }

    public function lihat()
    {
        $admin = User::all();
        return view('admin.admin-page.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin-page.tambah-admin.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasidata = $request->validate([
            'username'=>'required|min:3',
            'password'=> 'required|max:10'
        ]);
        $user = new User;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jabatan = $request->jabatan;
        $user->alamat = $request->alamat;
        $user->no_telepon = $request->no_telepon;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save($validasidata);

        return redirect('/admin/listadmin')->with('success','Data admin telah ditabahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.admin-page.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.admin-page.editadmin.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->nama_lengkap = $request->nama_lengkap;
        $user->jabatan = $request->jabatan;
        $user->alamat = $request->alamat;
        $user->no_telepon = $request->no_telepon;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/listadmin')->with('success', 'Data admin berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }
}
