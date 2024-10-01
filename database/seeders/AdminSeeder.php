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
                'nama_lengkap'=> 'Lugh Tuaha De',
                'jabatan'=>'Admin',
                'email'=> 'admin@admin.com',
                'nip'=> '7382932839',
                'alamat'=>'Jl. Sudirman No.22 Rt/02 Rw/03 Indramayu',
                'no_telepon'=>'0897382902',
                'username'=>'byan',
                'password'=>Hash::make('12345')
            ],
        ));
        // User::factory()->count(2)->create();
    }
}
