<?php

namespace Database\Seeders;

use App\Models\Paten;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            [
                
                'nama_prodi' => 'D3 Teknik Informatika',
                'kode_prodi' => 'd3ti'
            ],
            [
                'nama_prodi' => 'D4 Rekayasa Perangkat Lunak',
                'kode_prodi' => 'd4rpl'
            ],
            [
                'nama_prodi' => 'D4 Sistem Informasi Kota Cerdas',
                'kode_prodi' => 'd4sikc'
            ],
            [
                'nama_prodi' => 'D3 Teknik Mesin',
                'kode_prodi' => 'd3tm'
            ],
            [
                'nama_prodi' => 'D4 Perancangan Manufaktur',
                'kode_prodi' => 'd3pm'
            ],
            [
                'nama_prodi' => 'D3 Teknik Pendingin dan Tata Udara',
                'kode_prodi' => 'd3tp'
            ],
            [
                'nama_prodi' => 'D4 Teknik instrumentasi Kontrol',
                'kode_prodi' => 'd4trik'
            ],
            [
                'nama_prodi' => 'D3 Keperawatan',
                'kode_prodi' => 'd3kp'
            ]
        ]);
    }
}
