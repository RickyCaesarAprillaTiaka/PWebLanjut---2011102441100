<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kabkots = array(
            'Kabupaten Berau',
            'Kabupaten Kutai Barat',
            'Kabupaten Kutai Kartanegara',
            'Kabupaten Kutai Timur',
            'Kabupaten Mahakam Ulu',
            'Kabupaten Paser',
            'Kabupaten Penajam Paser Utara',
            'Kota Balikpapan',
            'Kota Bontang',
            'Kota Samarinda'
        );

        foreach ($kabkots as $kabkot) {
            DB::table('kabupaten_kotas')->insert([
                'kabkot' => $kabkot
            ]);
        }

    }
}
