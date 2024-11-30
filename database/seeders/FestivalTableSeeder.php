<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FestivalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('festivals')->insert([
            ['id' => 1, 'name' => '例祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '祈年祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '新嘗祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '式年祭り', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '鎮座祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '遷座祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '合祀祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => '分祀祭', 'festival_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => '歳旦祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => '元始祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => '紀元祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => '昭和祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => '神嘗奉祝祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => '明治祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => '天長祭', 'festival_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => '月次祭', 'festival_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => '日供祭', 'festival_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => '除夜祭', 'festival_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
