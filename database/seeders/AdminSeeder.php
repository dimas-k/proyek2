<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            [
                'nama_lengkap'=> 'Icha Syahrotul Anam, S.TP., M.Sc',
                'jabatan'=>'Admin',
                'email'=>'icha@polindra.ac.id',
                'nip'=> NULL,
                'alamat'=>'',
                'no_telepon'=>'0811242494',
                'username'=>'icha@polindra.ac.id',
                'password'=>Hash::make('Admin#123'),
            ]
        ));
        // User::factory()->count(2)->create();
    }
}
