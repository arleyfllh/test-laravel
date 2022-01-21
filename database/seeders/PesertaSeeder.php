<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertas')->insert([
            'nama' => 'Arley',
            'email' => 'arley@gmail.com',
            'nilai_X' => 1,
            'nilai_Y' => 7,
            'nilai_Z' => 6,
            'nilai_W' => 5,
        ]);
    }
}
