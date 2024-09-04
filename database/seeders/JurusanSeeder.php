<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusan')->insert([
            [
                'nama_jurusan' => 'Teknik Informatika',
                'kode_jurusan' => 'ti'
            ],
            [
                'nama_jurusan' => 'Teknik Mesin',
                'kode_jurusan' => 'tm'
            ],
            [
                'nama_jurusan' => 'Teknik Pendingin dan Tata Udara',
                'kode_jurusan' => 'tp'
            ],
            [
                'nama_jurusan' => 'Keperawatan',
                'kode_jurusan' => 'kp'
            ]
            
        ]);
    }
}
