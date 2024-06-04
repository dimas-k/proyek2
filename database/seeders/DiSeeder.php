<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('desain_industri')->insert([
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
                'jenis_di' => "Satu Desain",
                'judul_di' => "Suhendi",
                'uraian_di' => "Suhendi",
                'gambar_di' => "Suhendi.pdf",
                'surat_kepemilikan' => "2004-07-01",
                'surat_pengalihan' => "Keterangan belum lengkap",
                'tanggal_permohonan' => "2004-07-01",
                'status' => "Satu Desain",
                'sertifikat_desain' => "Suhendi.pdf",
            ]
        ]);
    }
}
