<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => '2201170059',
            'nama' => 'Muhammad Wahyudi',
            'alamat' => 'Pasaman Barat',
            'no_hp' => '082285871335',
        ]);
    }
}
