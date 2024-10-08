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
                'nama_lengkap'=> 'Icha Syahrotul Anam, S.TP., M.Sc.',
                'jabatan'=>'Verifikator',
                'alamat'=>'',
                'no_telepon'=>'0811242494',
                'email'=>'',
                'nip'=> NULL,
                'username'=>'Verifikator',
                'password'=>Hash::make('Verifikator#123'),
                'role'=>'Checker'
            ]
        ));
    }
}
