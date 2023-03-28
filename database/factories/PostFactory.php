<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * the name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::pluck('id')->toArray();
        $category_id = Category::pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'user_id' => $user_id[array_rand($user_id)],
            'category_id' => $category_id[array_rand($category_id)],
        ];
    }
}
