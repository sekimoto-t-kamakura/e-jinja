<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gods')->insert([
            ['id' => 1, 'name' => '天之御中主', 'name_kana' => 'アメノミナカヌシ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '高御産巣日', 'name_kana' => 'タカミムスヒ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '神産巣日', 'name_kana' => 'カムムスヒ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '伊邪那岐命', 'name_kana' => 'イザナギノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '伊邪那美命', 'name_kana' => 'イザナミノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '天照大御神', 'name_kana' => 'アマテラスオオミカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '月読命', 'name_kana' => 'ツクヨミノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => '須佐之男命', 'name_kana' => 'スサノオノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => '大国主神', 'name_kana' => 'オオクニヌシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => '少名毘古那神', 'name_kana' => 'スクナビコナノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => '大物主神', 'name_kana' => 'オオモノヌシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => '建御雷神', 'name_kana' => 'タケミカヅチノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => '経津主神', 'name_kana' => 'フツヌシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => '建御名方神', 'name_kana' => 'タケミナカタノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => '事代主神', 'name_kana' => 'コトシロヌシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => '邇邇芸命', 'name_kana' => 'ニニギノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => '天宇受売命', 'name_kana' => 'アメノウズメノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => '猿田毘古神', 'name_kana' => 'サルタビコノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'name' => '天手力男神', 'name_kana' => 'アメノタヂカラオノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'name' => '思金神', 'name_kana' => 'オモイカネノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'name' => '天児屋命', 'name_kana' => 'アメノコヤネノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'name' => '布刀玉命', 'name_kana' => 'フトダマノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'name' => '玉祖命', 'name_kana' => 'タマノオヤノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'name' => '木花之佐久夜毘売命', 'name_kana' => 'コノハナノサクヤビメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'name' => '石長比売命', 'name_kana' => 'イワナガヒメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'name' => '大山津見神', 'name_kana' => 'オオヤマツミノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'name' => '住吉神', 'name_kana' => 'スミヨシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'name' => '綿津見神', 'name_kana' => 'ワタツミノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'name' => '宗像三女神', 'name_kana' => 'ムナカタサンジョシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'name' => '櫛名田比売命', 'name_kana' => 'クシナダヒメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'name' => '須勢理毘売命', 'name_kana' => 'スセリビメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'name' => '日子穂穂手見命', 'name_kana' => 'ヒコホホデミコノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'name' => '豊玉毘売命', 'name_kana' => 'トヨタマビメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'name' => '玉依毘売命', 'name_kana' => 'タマヨリビメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'name' => '塩椎神', 'name_kana' => 'シオツチノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'name' => '鵜葺草葺不合命', 'name_kana' => 'ウガヤフキアエズノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'name' => '大宜津比売神', 'name_kana' => 'オオゲツヒメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'name' => '大年神', 'name_kana' => 'オオトシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'name' => '豊宇気毘売神', 'name_kana' => 'トヨウケビメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'name' => '迦具土神', 'name_kana' => 'カグツチノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'name' => '水の神', 'name_kana' => 'ミズノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'name' => '志那都比古神', 'name_kana' => 'シナツヒコノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'name' => '金山毘古神', 'name_kana' => 'カナヤマビコノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'name' => '大山咋神', 'name_kana' => 'オオヤマクイノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'name' => '菊理媛神', 'name_kana' => 'ククリヒメノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'name' => '一言主神', 'name_kana' => 'ヒトコトヌシノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'name' => '賀茂別雷神', 'name_kana' => 'カモワケイカヅチノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'name' => '賀茂建角身神', 'name_kana' => 'カモタケツヌミノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'name' => '玉依媛命', 'name_kana' => 'タマアヨリヒメノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'name' => '家津美御子大神', 'name_kana' => 'ケツミミコノオオカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 51, 'name' => '熊野速玉大神', 'name_kana' => 'クマノハヤタマノオオカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 52, 'name' => '熊野夫須美大神', 'name_kana' => 'クマノフスミノオオカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 53, 'name' => '阿遅鉏高日子根', 'name_kana' => 'アヂスキタカヒコネノカミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 54, 'name' => '神武天皇', 'name_kana' => 'ジンムテンノウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 55, 'name' => '邇芸速日命', 'name_kana' => 'ニギハヤヒノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 56, 'name' => '健磐龍命', 'name_kana' => 'タケイワタツノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 57, 'name' => '吉備津彦命', 'name_kana' => 'キビツヒコノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 58, 'name' => '倭建命', 'name_kana' => 'ヤマトタケルノミコト', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 59, 'name' => '神功皇后', 'name_kana' => 'ジングウコウゴウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 60, 'name' => '武内宿禰命', 'name_kana' => 'タケノウチノスクネ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 61, 'name' => '八幡伸', 'name_kana' => 'ハチマンシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 62, 'name' => '稲荷神', 'name_kana' => 'イナリシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 63, 'name' => '菅原道真公', 'name_kana' => 'スガワラミチザネコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 64, 'name' => '平将門公', 'name_kana' => 'タイラノマサカドコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 65, 'name' => '崇徳上皇', 'name_kana' => 'ストクジョウコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 66, 'name' => '安徳天皇', 'name_kana' => 'アントクテンノウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 67, 'name' => '聖徳太子', 'name_kana' => 'ショウトクタイシ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 68, 'name' => '小野篁公', 'name_kana' => 'オノノタカムラコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 69, 'name' => '安倍晴明公', 'name_kana' => 'アベノセイメイコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 70, 'name' => '藤原鎌足公', 'name_kana' => 'フジワラノカマタリコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 71, 'name' => '和気清麻呂公', 'name_kana' => 'ワケノキヨマロコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 72, 'name' => '後醍醐天皇', 'name_kana' => 'ゴダイゴテンノウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 73, 'name' => '楠木正成公', 'name_kana' => 'クスノキマサシゲコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 74, 'name' => '新田義貞公', 'name_kana' => 'ニッタヨシサダコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 75, 'name' => '豊臣秀吉公', 'name_kana' => 'トヨトミヒデヨシコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 76, 'name' => '徳川家康公', 'name_kana' => 'トクガワイエヤスコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 77, 'name' => '武田信玄公', 'name_kana' => 'タケダシンゲンコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 78, 'name' => '上杉謙信公', 'name_kana' => 'ウエスギケンシンコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 79, 'name' => '柿本人麻呂公', 'name_kana' => 'カキノモトノヒトマロコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 80, 'name' => '二宮尊徳翁', 'name_kana' => 'ニノミヤタカノリオウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 81, 'name' => '藤原秀郷公', 'name_kana' => 'フジワラノヒデサトコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 82, 'name' => '清原頼業公', 'name_kana' => 'キヨハラノヨリナリコウ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 83, 'name' => '吉田松陰先生', 'name_kana' => 'ヨシダショウインセンセイ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 84, 'name' => '恵比寿神', 'name_kana' => 'エビスシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 85, 'name' => '道祖神', 'name_kana' => 'ドウソシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 86, 'name' => '庚申', 'name_kana' => 'コウシン', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 87, 'name' => '年神', 'name_kana' => 'トシガミ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 88, 'name' => '荒神', 'name_kana' => 'コウシン', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
