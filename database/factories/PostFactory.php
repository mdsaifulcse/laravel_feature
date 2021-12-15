<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    public function definition()
    {
        $userIds=User::pluck('id')->toArray();
        $categoryIds=Category::pluck('id')->toArray();


        return [
            'title'=> $this->faker->sentence(3),
            'description'=> $this->faker->text(),
            'user_id'=> $userIds[array_rand($userIds)],
            'category_id'=> $categoryIds[array_rand($categoryIds)],
            'status'=> $this->faker->numberBetween(0, 1)
        ];
    }
}
