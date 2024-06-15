<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CheckerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            [
                'nama_lengkap'=> 'Lugh Tuaha De',
                'jabatan'=>'Verifikator',
                'alamat'=>'Jl. Sudirman No.22 Rt/02 Rw/03 Indramayu',
                'no_telepon'=>'0897382902',
                'email'=>'apalagi@gmail.com',
                'nip'=>'733282738327',
                'username'=>'siapa',
                'password'=>Hash::make('12345'),
                'role'=>'Checker'
            ]
        ));
    }
}
