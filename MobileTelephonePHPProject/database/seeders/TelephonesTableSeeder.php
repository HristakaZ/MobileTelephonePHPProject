<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telephones')->insert([
            [
                'id' => 1,
                'yearofrelease' => 2019,
                'brand_id' => 1,
                'telephone_model_id' => 1,
                'image' => 'storage/telephones/eda32402559ad29497377309cc2f92a4.jpg'
            ],
            [
                'id' => 2,
                'yearofrelease' => 2017,
                'brand_id' => 2,
                'telephone_model_id' => 2,
                'image' => 'storage/telephones/26cb8b7a7568b3f352175277ed6ee364.jpg'
            ]
        ]);
    }
}
