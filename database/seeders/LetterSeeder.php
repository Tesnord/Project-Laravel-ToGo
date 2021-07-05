<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letter = array(
            'A' => 'en-A',  'B' => 'en-B',   'C' => 'en-C',  'D' => 'en-D',  'E' => 'en-E',    'F' => 'en-F',
            'G' => 'en-G',  'H' => 'en-H',   'I' => 'en-I',  'J' => 'en-J',  'K' => 'en-K',    'L' => 'en-L',
            'M' => 'en-M',  'N' => 'en-N',   'O' => 'en-O',  'P' => 'en-P',  'Q' => 'en-Q',    'R' => 'en-R',
            'S' => 'en-S',  'T' => 'en-T',   'U' => 'en-U',  'V' => 'en-V',  'W' => 'en-W',    'X' => 'en-X',
            'Y' => 'en-Y',  'Z' => 'en-Z',   'А' => 'ru-A',  'Б' => 'ru-B',  'В' => 'ru-V',    'Г' => 'ru-G',
            'Д' => 'ru-D',  'Е' => 'ru-E',   'Ё' => 'ru-IE', 'Ж' => 'ru-ZH', 'З' => 'ru-Z',    'И' => 'ru-I',
            'Й' => 'ru-Y',  'К' => 'ru-K',   'Л' => 'ru-L',  'М' => 'ru-M',  'Н' => 'ru-N',    'О' => 'ru-O',
            'П' => 'ru-P',  'Р' => 'ru-R',   'С' => 'ru-S',  'Т' => 'ru-T',  'У' => 'ru-U',    'Ф' => 'ru-F',
            'Х' => 'ru-H',  'Ц' => 'ru-TS',  'Ч' => 'ru-CH', 'Ш' => 'ru-SH', 'Щ' => 'ru-SHCH', 'Ъ' => 'ru-THD',
            'Ы' => 'ru-IY', 'Ь' => 'ru-TSF', 'Э' => 'ru-EE', 'Ю' => 'ru-YU', 'Я' => 'ru-YA',
        );

        foreach ($letter as $key => $value) {
            DB::table('letters')->insert([
                'letter' => $key,
                'value' => $value,
            ]);
        }
    }
}
