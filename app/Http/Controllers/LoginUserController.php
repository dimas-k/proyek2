<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login-user.login.index');
    }
    public function regist(){
        return view('login-user.regist.index');
    }
    public function registDosen(){
        return view('login-user.regist.dosen.index');
    }
    public function registUmum(){
        return view('login-user.regist.other.index');
    }
    
    public function autentikasi(Request $request){
    
        $credentials = $request-> validate([
            'username' => 'required',
            'password' => 'required',
            
            
        ]);
        
        // dd($request);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
           if(Auth::user()->role =='Dosen')
           {
             return redirect('/dosen/dashboard');
           }
           elseif(Auth::user()->role =='Umum')
           {
                return redirect('/umum/dashboard');
           }
        }
        return back()->with('loginError', 'Login Gagal!');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasidata = $request->validate([
            'nama_lengkap' => 'required|string',
            'no_telepon'=>'required|string',
            'email' => 'required|email:dns|unique:users',
            'ktp'=>'required|mimes:pdf|max:2028',
            'username'=>'required|min:5|unique:users',
            'password'=> 'required|min:5|max:15'
        ]);
        $user = new User;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->no_telepon = $request->no_telepon;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->ktp = $request->file('ktp')->store('dokumen_user');
        $user->kerjaan = $request->kerjaan;
        $user->jabatan = $request->jabatan;
        $user->nip = $request->nip;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save($validasidata);

        
        if ($request->role == 'Dosen'){
            return redirect()->intended('register/dosen/')->with('success','Data anda telah ditambahkan');
        }else{
            return redirect()->intended('register/umum/')->with('success','Data anda telah ditambahkan');
        }
        
    }

    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
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
