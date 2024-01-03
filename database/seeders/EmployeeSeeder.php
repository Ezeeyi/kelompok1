<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama_produk' => 'Sosis Panggang',
            'status_produk' => 'Masuk',
            'kode_produk' => 'FTR25122023',
            'penerima' => 'Fathor Rozi',
            'no_telpon' => '08780453422',
        ]);
    }
}