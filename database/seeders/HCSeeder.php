<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hak_cipta')->insert([
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
            'jurusan' => "Teknik Informatika",
            'prodi' => "D4 RPL",
            'jenis_ciptaan' => "Karya Tulis",
            'judul_ciptaan' => "Suhendi",
            'uraian_singkat' => "Suhendi",
            'dokumen_invensi' => "Suhendi.pdf",
            'surat_pengalihan' => "Suhendi.pdf",
            'surat_pernyataan' => "Suhendi.pdf",
            'tanggal_permohonan' => "2004-07-01",
            'status' => "Keterangan belum lengkap",
            'sertifikat_hakcipta' => "Suhendi.pdf",
            ]
        
        
        ]);
    }
}
