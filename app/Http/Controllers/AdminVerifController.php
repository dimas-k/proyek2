<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminVerifController extends Controller
{
    public function lamanVerif()
    {
        $verif = User::where('role', 'Checker')->paginate(5);
        return view('admin.admin-verif.index', compact('verif'));
    }
    public function lihat(string $id)
    {
        $verif = User::find($id);
        return view('admin.admin-verif.show.index', compact('verif'));
    }
    public function tambahVerif(Request $request)
    {
        $validasi = $request->validate([
            'nama_lengkap' => 'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'no_telepon'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $verif = new User;
        $verif->nama_lengkap = $request->nama_lengkap;
        $verif->jabatan = $request->jabatan;
        $verif->alamat = $request->alamat;
        $verif->no_telepon = $request->no_telepon;
        $verif->username = $request->username;
        $verif->password = Hash::make($request->password);
        $verif->role = $request->role;
        $verif->save($validasi);
        return redirect('/admin/verif')->with('success', 'Data verifikator berhasil di buat');
    }
    public function update(string $id, Request $request)
    {
        $validasi = $request->validate([
            'nama_lengkap' => 'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'no_telepon'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $verif = User::find($id);
        $verif->nama_lengkap = $request->nama_lengkap;
        $verif->jabatan = $request->jabatan;
        $verif->alamat = $request->alamat;
        $verif->no_telepon = $request->no_telepon;
        $verif->username = $request->username;
        $verif->password = Hash::make($request->password);
        $verif->save($validasi);
        return redirect('/admin/verif')->with('success', 'Data verifikator berhasil di update');
    }
    public function hapus(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Akun Verifikator telah dihapus!');
    }

}
