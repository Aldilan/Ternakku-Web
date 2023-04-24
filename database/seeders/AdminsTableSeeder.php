<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama_pengguna' => 'admin',
            'email' => 'admin@ternakku.com',
            'no_telp' => '081288382332',
            'level' => 'admin'
        ]);
    }
}
