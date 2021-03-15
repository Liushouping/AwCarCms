<?php

namespace Database\Factories;

use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InfoFactory extends Factory
{
    protected $model = Info::class;

    public function definition()
    {
        $images = [
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_001-1.png?w=1080&ssl=1',
            'https://i0.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_009-2.png?w=1081&ssl=1',
            'https://i2.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_011-2.png?w=1081&ssl=1',
            'https://i0.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_014-1.png?w=1080&ssl=1',
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_002-1.png?w=1080&ssl=1',
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_005-1.png?w=1080&ssl=1',
        ];
        
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->text(200),
            'on_sale' => $this->faker->boolean(true),
            'order' => $this->faker->unique()->numberBetween(1, 100),
            'status' => $this->faker->boolean(true),
            'image' => $this->faker->randomElement($images),
        ];
    }
}