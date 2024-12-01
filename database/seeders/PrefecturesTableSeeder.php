<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prefectures')->insert([
            ['id' => 1, 'name' => '北海道', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '青森県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '岩手県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '宮城県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '秋田県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '山形県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '福島県', 'area_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => '茨城県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => '栃木県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => '群馬県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => '埼玉県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => '千葉県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => '東京都', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => '神奈川県', 'area_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => '新潟県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => '富山県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => '石川県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => '福井県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'name' => '山梨県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'name' => '長野県', 'area_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'name' => '岐阜県', 'area_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'name' => '静岡県', 'area_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'name' => '愛知県', 'area_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'name' => '三重県', 'area_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'name' => '滋賀県', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'name' => '京都府', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'name' => '大阪府', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'name' => '兵庫県', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'name' => '奈良県', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'name' => '和歌山県', 'area_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'name' => '鳥取県', 'area_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'name' => '島根県', 'area_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'name' => '岡山県', 'area_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'name' => '広島県', 'area_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'name' => '山口県', 'area_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'name' => '徳島県', 'area_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'name' => '香川県', 'area_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'name' => '愛媛県', 'area_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'name' => '高知県', 'area_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'name' => '福岡県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'name' => '佐賀県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'name' => '長崎県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'name' => '熊本県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'name' => '大分県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'name' => '宮崎県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'name' => '鹿児島県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'name' => '沖縄県', 'area_id' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
