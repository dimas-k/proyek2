<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paten;

class ApiPatenController extends Controller
{

    public function countAllDataPaten()
    {
        try {
            $paten = Paten::where('status', 'Diberi')->count();
    
            return response()->json([
                "status" => 200,
                "message" => "Data terpanggil",
                "list_data" => $paten
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th->getMessage()
            ]);
        }
    }
    

    public function getPatenById($id)
    {
        try {
            $paten = Paten::find($id);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $paten
        ]);

    }
    public function getPatenDosen()
    {
        try {
            $paten = Paten::where('institusi', 'Dosen')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $paten
        ]);
    }
    public function getPatenUmum()
    {
        try {
            $paten = Paten::where('institusi', 'Umum')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $paten
        ]);
    }

}
