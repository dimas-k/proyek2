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
    public function getAllData() {
        try {
            $user = user::first()->get();

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
            "message" => "Data terpanggil",
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
}
