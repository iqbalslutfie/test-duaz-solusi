<?php

use App\Consument;
use Illuminate\Database\Seeder;

class ConsumentTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consument::create([
            'nama' => 'Budi',
            'jenis_kendaraan' => 'Mobil',
            'no_polisi' => 'B 1208 UHY',
            'tgl_lahir' => '1990-12-18',
            'jenis_kelamin' => 'L',
            'no_hp' => '081299234'
        ]);

        Consument::create([
            'nama' => 'Putri',
            'jenis_kendaraan' => 'Motor',
            'no_polisi' => 'B 5403 RGS',
            'tgl_lahir' => '1990-12-18',
            'jenis_kelamin' => 'P',
            'no_hp' => '081299234'
        ]);
    }
}
