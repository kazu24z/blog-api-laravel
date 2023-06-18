<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Model
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => function () {
                return Admin::inRandomOrder()->first()->admin_id;
            },
            'category_id' => function () {
                return Category::inRandomOrder()->first()->category_id;
            },
            'title' => $this->faker->sentence(),
            'content' => $this->faker->realText(50),
             // TODO:ここEnumにする？, 公開中(released)
            'status' => 'draft',
            'comments_enabled' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
