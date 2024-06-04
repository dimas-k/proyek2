<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paten')->insert([
            [
                'user_id' => 6,
                'nama_lengkap' => "Suhendi",
                'alamat' => "Suhendi",
                'no_telepon' => "0809090",
                'tanggal_lahir' => "2004-07-01",
                'ktp_inventor' => "Suhendi.pdf",
                'email' => "Suhendi",
                'kewarganegaraan' => "Prancis",
                'kode_pos' => "89898",
                'institusi' => "ITB",
                'jenis_paten' => "Karya Tulis",
                'judul_paten' => "Suhendi",
                'abstrak_paten' => "Suhendi",
                'deskripsi_paten' => "Suhendi.pdf",
                'pengalihan_hak' => "Suhendi.pdf",
                'klaim' => "Suhendi.pdf",
                'pernyataan_kepemilikan' => "2004-07-01",
                'surat_kuasa' => "Keterangan belum lengkap",
                'gambar_paten' => "Suhendi.pdf",
                'gambar_tampilan' => "Suhendi.pdf",
                'tanggal_permohonan' => "2004-07-01",
                'sertifikat_paten' => "Suhendi.pdf",
                'status' => "Pemeriksaan formalitas"
                ]
        ]);
}
}