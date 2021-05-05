<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m < 6; $m++)
            DB::table('reviews')->insert([
                'user_id' => 1,
                'rating' => rand(1, 5),
                'description' => 'Хорошее и натуральное спелое манго, которое будет сочиться и будет обладать неповторимымвкусом и ароматом, найти достаточно сложно! Если приобрести манго в любом сетевом магазине,то Вы сами в этом убедитесь. Их манго жесткие, незрелые, блестят',
            ]);

    }
}
