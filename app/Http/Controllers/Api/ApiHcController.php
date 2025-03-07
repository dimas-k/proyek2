<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HakCipta;
use Illuminate\Http\Request;

class ApiHcController extends Controller
{
    public function countAllDataHc()
    {
        try {
            $hc = HakCipta::where('status', 'Tercatat')->count();
            return response()->json([
                "status" => 200,
                "message" => "Data terpanggil",
                "list_data" => $hc
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th->getMessage()
            ]);
        }
    }

    public function getDataById($id)
    {
        try {
            $hc = HakCipta::find($id);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $hc
        ]);
    }
    
    public function getDataDosen()
    {
        try {
            $hc = HakCipta::where('institusi', 'Dosen')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $hc
        ]);
    }

    public function getDataUmum()
    {
        try {
            $hc = HakCipta::where('institusi', 'Umum')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $hc
        ]);
    }
}
