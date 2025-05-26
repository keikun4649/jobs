<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        $job_category = $this->faker->randomElement(['看護師', 'エンジニア']);

        if ($job_category === 'エンジニア') {
            $titles = [
                'Webエンジニア（PHP）',
                'フロントエンド開発（Vue.js）',
                'バックエンドエンジニア（Laravel）',
                'インフラエンジニア（AWS）',
                '未経験OK！ITエンジニア育成求人',
            ];
            $employmentTypes = ['正社員', '契約社員', '業務委託', 'フルリモート'];
            $salary = $this->faker->randomElement([
                '年収500万円～800万円',
                '月給40万円～60万円',
                '時給2500円～',
            ]);
            $description = $this->faker->randomElement([
                '自社Webサービスの開発を担当していただきます。',
                'PHP/Laravelを用いた受託案件開発。コードレビュー体制も充実！',
                'フルリモート可能な環境で最新技術を学べる環境です。',
                '社内SEとしてシステムの保守・改善を行っていただきます。',
                'クラウドインフラ（AWS）経験者歓迎！設計から携われます。',
            ]);
        } else {
            $titles = [
                '訪問看護スタッフ募集',
                'クリニック看護師（日勤のみ）',
                '病棟勤務スタッフ',
            ];
            $employmentTypes = ['常勤', '非常勤', '日勤のみ', '夜勤専従'];
            $salary = $this->faker->randomElement([
                '月給30万円～',
                '時給1800円以上＋交通費支給',
            ]);
            $description = $this->faker->randomElement([
                '地域に密着したクリニックでの外来看護業務です。',
                '高齢者施設での健康管理業務をお任せします。',
                'ブランクOK・研修制度ありで安心スタート可能！',
                '訪問看護ステーションにて1日4件程度を訪問していただきます。',
                '日勤のみ、残業ほぼなしの職場です。子育て中の方も歓迎！',
            ]);
        }

        return [
            'title' => $this->faker->randomElement($titles),
            'description' => $description,
            // 'location' => $this->faker->prefecture() . $this->faker->city(),
            'location' => $this->faker->randomElement(['東京都', '大阪府', '神奈川県']) . $this->faker->city(),
            'employment_type' => $this->faker->randomElement($employmentTypes),
            'salary' => $salary,
            'job_category' => $job_category,
        ];
    }
}
