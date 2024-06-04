<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class ApiUsersController extends Controller
{
    public function store(Request $request){

        try {
            $user = new User;
            $user->nama_lengkap = $request->nama_lengkap;
            $user->no_telepon = $request->no_telepon;
            $user->email = $request->email;
            $user->alamat = $request->alamat;
            $user->ktp = $request->ktp;
            $user->kerjaan = $request->kerjaan;
            $user->jabatan = $request->jabatan;
            $user->nip = $request->nip;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data User Berhasil Dibuat!"
        ]);
    }        
    public function getAllData() {
        try {
            $user = User::first()->get();

        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data"=> $user
        ]);
    }

    public function getData($id)
    {
        try {
            $user = User::find($id);
    
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data Berhasil Terpanggil!",
            "data"=> $user
        ]);
    }


    public function deleteData($id)
    {
        try {
            $user = User::find($id)->delete();
    
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data sudah dihapus",
        ]);
    }
    public function updateData(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $user->nama_lengkap = $request->nama_lengkap;
            $user->no_telepon = $request->no_telepon;
            $user->email = $request->email;
            $user->alamat = $request->alamat;
            $user->ktp = $request->ktp;
            $user->kerjaan = $request->kerjaan;
            $user->jabatan = $request->jabatan;
            $user->nip = $request->nip;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data berhasil diupdate"
        ]);

    }
}
