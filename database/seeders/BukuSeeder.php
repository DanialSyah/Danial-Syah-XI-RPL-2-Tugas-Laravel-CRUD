<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')->insert(
            [
                'nama'=>'Harry Potter',
                'harga'=>'100.000',
                'sinopsis'=>'Harry as',
                'penulis'=>'Aku',
                'penerbit'=>'Siapa'

            ]);
    }
}
