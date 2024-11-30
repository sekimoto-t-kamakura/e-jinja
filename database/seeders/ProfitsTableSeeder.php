<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profits')->insert([
            ['id' => 1, 'name' => '水子', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '自動車・乗り物', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'ペットの守護', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '方位除け・八方除け・鬼門除け', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '虫切り・虫封じ', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '罪障消滅', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '厄除け全般', 'profit_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => '海難', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => '厄除け・悪霊除け', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => '水難・火難・盗難', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => '交通安全', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => '海上安全・守護', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => '航空安全', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => '安全祈願全般', 'profit_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => '心身健全', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => '眼病', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => '耳病', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => 'がん封じ', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'name' => 'てんかん封じ', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'name' => '病気平癒・無病息災', 'profit_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'name' => '出世開運', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'name' => '金運', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'name' => '商売繁盛', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'name' => '現世利益', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'name' => '殖産興業', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'name' => '漁業振興・大漁満足', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'name' => '農耕・五穀豊穣', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'name' => '事業発展・社業繁栄', 'profit_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'name' => '良縁祈願・縁結び', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'name' => '恋愛', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'name' => '浮気封じ', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'name' => '縁切り', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'name' => '縁結び', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'name' => '縁結び・安産祈願', 'profit_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'name' => '家内安全', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'name' => '夫婦和合・円満', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'name' => '学業成就・受験祈願', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'name' => '音楽・芸能上達', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'name' => '武道上達・スポーツ祈願', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'name' => '安産守護', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'name' => '子授け・子育て', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'name' => '子孫繁栄', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'name' => '延命長寿', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'name' => 'ポックリさま・安楽往生', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'name' => 'ぼけ除け・ボケ封じ', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'name' => '安らぎとこころの糧', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'name' => '智慧明了', 'profit_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'name' => '開運招福', 'profit_category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'name' => '運勢隆昌', 'profit_category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'name' => '心願成就', 'profit_category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'name' => '必勝祈願', 'profit_category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
