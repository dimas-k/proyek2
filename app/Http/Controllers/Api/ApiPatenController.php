<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paten;

class ApiPatenController extends Controller
{
    public function store(Request $request)
    {
        try {
            $paten = new Paten();
            $paten->nama_lengkap = $request->nama_lengkap;
            $paten->alamat = $request->alamat;
            $paten->no_telepon = $request->no_telepon;
            $paten->tanggal_lahir = $request->tanggal_lahir;
            $paten->ktp_inventor = $request->file('ktp_inventor')->store('dokumen-paten');
            $paten->email = $request->email;
            $paten->kewarganegaraan = $request->kewarganegaraan;
            $paten->kode_pos = $request->kode_pos;
            $paten->jenis_paten = $request-> jenis_paten;
            $paten->judul_paten = $request->judul_paten;
            $paten->abstrak_paten = $request->file('abstrak_paten')->store('dokumen-paten');
            $paten->deskripsi_paten = $request->file('deskripsi_paten')->store('dokumen-paten');
            $paten->pengalihan_hak = $request->file('pengalihan_hak')->store('dokumen-paten');
            $paten->klaim = $request->file('klaim')->store('dokumen-paten');
            $paten->pernyataan_kepemilikan = $request->file('pernyataan_kepemilikan')->store('dokumen-paten');
            $paten->surat_kuasa = $request->file('surat_kuasa')->store('dokumen-paten');
            $paten->gambar_paten = $request->file('gambar_paten')->store('dokumen-paten');
            $paten->gambar_tampilan = $request->file('gambar_tampilan')->store('dokumen-paten');
            $paten->tanggal_permohonan = $request->tanggal_permohonan;
            $paten->save();
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
    public function getAllDataPaten() {
        try {
            $paten = Paten::first()->get();

        } catch (\Throwable $th) {
            return response()->json([
                "status" => 400,
                "message" => $th
            ]);
        }
        return response()->json([
            "status" => 200,
            "message" => "Data terpanggil",
            "list_data"=> $paten
        ]);
    }
   
}
