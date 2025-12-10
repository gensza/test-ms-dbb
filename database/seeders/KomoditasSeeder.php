<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KomoditasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_komoditas')->insert([
            [
                'id_produksi'       => 2,
                'tanggal_type'      => '2024-11-06',
                't_komoditas_kode'  => 'K002',
                'produksi'          => 345000,
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
            [
                'id_produksi'       => 3,
                'tanggal_type'      => '2024-11-05',
                't_komoditas_kode'  => 'K002',
                'produksi'          => 430000,
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
            [
                'id_produksi'       => 4,
                'tanggal_type'      => '2024-12-12',
                't_komoditas_kode'  => 'K003',
                'produksi'          => 250000,
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
            [
                'id_produksi'       => 5,
                'tanggal_type'      => '2025-01-02',
                't_komoditas_kode'  => 'K004',
                'produksi'          => 430000,
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
        ]);
    }
}
