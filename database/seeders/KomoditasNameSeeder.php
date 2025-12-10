<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomoditasNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_komoditas_name')->insert([
            [
                'komoditas_kode'    => 'K002',
                'komoditas_name'    => "testing21",
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
            [
                'komoditas_kode'    => 'K003',
                'komoditas_name'    => "testing3",
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ],
            [
                'komoditas_kode'    => 'K004',
                'komoditas_name'    => "testing4",
                'created_on'        => '2024-11-06 00:00:00',
                'created_by'        => "insert",
                'updated_on'        => Carbon::now(),
                'updated_by'        => 1,
            ]
        ]);
    }
}
