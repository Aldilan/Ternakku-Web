<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'dilannhr_',
            'password' => bcrypt('dilan'),
            'nama_pengguna' => 'Aldilan',
            'email' => 'aldilan108@nittech.com',
            'no_telp' => '085171155357',
        ]);
    }
}
