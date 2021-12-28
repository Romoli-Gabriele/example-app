<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>random_int(1,5),
            'category_id'=>random_int(1,5),
            'title' => $title = $this->faker->sentence(),
            'paragrafo'=> $this->faker->sentence(),
            'slug'=> str_replace(' ','-',$title),
            'body'=> $this->faker->paragraph(),
            'publishDate'=>$this->faker->date('Y-m-d', 'now')
        ];
    }
}
