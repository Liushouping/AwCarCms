<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition()
    {
        $images = [
            'https://s3-ap-northeast-1.amazonaws.com/thga/wp-content/uploads/2019/11/07021637/index_03.png',
        ];
        
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text(200),
            'on_sale' => $this->faker->boolean(true),
            'order' => $this->faker->unique()->numberBetween(1, 100),
            'link' => $this->faker->url,
            'image' => $this->faker->randomElement($images),
        ];
    }
}