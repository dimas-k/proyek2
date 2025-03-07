<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DesainIndustri;
use Illuminate\Http\Request;

class ApiDiController extends Controller
{
    public function countAllDataDi()
    {
        try {
            $di = DesainIndustri::where('status', 'Diberi')->count();

            return response()->json([
                "status" => 200,
                "message" => "Data terpanggil",
                "list_data" => $di
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
            $di = DesainIndustri::where('status', 'Diberi')->count();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $di
        ]);
    }
    
    public function getDataDosen()
    {
        try {
            $di = DesainIndustri::where('institusi', 'Dosen')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $di
        ]);
    }

    public function getDataUmum()
    {
        try {
            $di = DesainIndustri::where('institusi', 'Umum')->get();
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data" => $di
        ]);
    }
}
