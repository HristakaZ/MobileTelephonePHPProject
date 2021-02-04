<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'id' => 1,
                'name' => 'Samsung',
                'yearofestablishment' => 1938
            ],
            [
                'id' => 2,
                'name' => 'Apple',
                'yearofestablishment' => 1976
            ]
        ]);
    }
}
