<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DesainIndustri;
use Illuminate\Http\Request;

class ApiDiController extends Controller
{
    public function getAllData()
    {
        try {
            $di = DesainIndustri::all();
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

    public function getDataById($id)
    {
        try {
            $di = DesainIndustri::find($id);
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
