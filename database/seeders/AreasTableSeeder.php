<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            ['id' => 1, 'name' => '北海道・東北', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '関東', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '甲信越・北陸', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '東海', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '関西', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '中国', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '四国', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => '九州・沖縄', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
