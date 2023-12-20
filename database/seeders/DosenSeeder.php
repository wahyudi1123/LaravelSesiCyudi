<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn' => '1017058002',
            'nama' => 'Thomson Mary S.Kom, M.Kom',
            'alamat' => 'Padang',
            'no_hp' => '081268900854',
        ]);
    }
}
