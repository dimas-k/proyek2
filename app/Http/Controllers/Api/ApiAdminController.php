<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class ApiAdminController extends Controller
{
    public function store(Request $request){

        try {
            $user = new User;
            $user->nama_lengkap = $request->nama_lengkap;
            $user->jabatan = $request->jabatan;
            $user->alamat = $request->alamat;
            $user->no_telepon = $request->no_telepon;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data successfully submited!!"
        ]);
    }
    public function getData(Request $request) {
        try {
            $user = user::where('nama_lengkap', 'ica')->get();

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
}
