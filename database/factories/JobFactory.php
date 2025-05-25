<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            '訪問看護スタッフ募集',
            'クリニック看護師（日勤のみ）',
            '病棟勤務スタッフ',
            '夜勤専従の看護師募集',
            '特別養護老人ホームの看護師',
            '育児と両立◎パート看護師',
            '小児科クリニックでの勤務',
        ];

        $employmentTypes = ['常勤', '非常勤', '日勤のみ', '夜勤専従', 'パート'];
        $locations = ['東京都', '大阪府', '福岡県', '北海道', '神奈川県', '愛知県', '京都府', '埼玉県', '兵庫県'];

        return [
            'title' => fake()->randomElement($titles),
            'description' => fake()->realText(300),
            'location' => fake()->randomElement($locations),
            'employment_type' => fake()->randomElement($employmentTypes),
            'salary' => fake()->randomElement([
                '月給30万円～',
                '月給25万円～35万円',
                '時給1600円～2000円',
                '月給28万円～＋賞与年2回',
                '時給1800円以上＋交通費支給'
            ]),
            'job_category' => '看護師',
        ];
    }
}
