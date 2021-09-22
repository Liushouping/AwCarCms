<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            'https://static.wixstatic.com/media/d1e09d_5723fba4c61c40e797e5a202398a9b23~mv2.jpg/v1/fill/w_625,h_420,al_c,lg_1,q_80/458-1.jpg',
            'https://static.wixstatic.com/media/87294f_e1a45a6db8a041079cf152ecf9b4a245~mv2_d_1920_1551_s_2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/Ferrari%20488%20GTB.jpg',
            'https://static.wixstatic.com/media/87294f_75fbcab05ec4414593a8df71e362dcc8~mv2_d_1920_1551_s_2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/610lp-4.jpg',
            'https://static.wixstatic.com/media/87294f_f14f569371b24fe289667ab88caae12a~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/McLaren%20720S.jpg',
            'https://static.wixstatic.com/media/87294f_183fad44ac1c4681abb92b359e63e3d2~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/650ss.jpg',
            'https://static.wixstatic.com/media/87294f_ad8adab9e1844e5e901e05c9ce620ff0~mv2.jpg/v1/fill/w_690,h_464,al_c,q_80,usm_0.66_1.00_0.01/McLaren%20570S.jpg',
        ];
            
        $title = [
            'Ferrari 458 Italia',
            'Ferrari 488 GTB',
            'Lamborghini Huracan LP610',
            'McLaren 720S',
            'McLaren 650S',
            'McLaren 570S',
        ];

        $description = [
            '2門2人座',
            '2門4人座'
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'image' => $this->faker->randomElement($images),
            'description' => $this->faker->randomElement($description),
        ];
    }
}
