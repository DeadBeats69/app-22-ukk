<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'nama'  => 'admin1',
            'jk' => 'L',
            'tgl_lahir' => '2005-01-02',
            'email' => 'admin@gmail.com',
            'telepon' => '082156477231',
            'password' => Hash::make('password'),
            'alamat' => 'jl.manggis',
            'role' => 'admin'
        ]);
    }
}
