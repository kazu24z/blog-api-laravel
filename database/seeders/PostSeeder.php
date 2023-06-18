<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * PostSeeder
 */
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(10)->create()->each(function ($post) {
            // tagとの紐づけ（中間テーブルのレコード生成）
            $tag_id = Tag::inRandomOrder()->value('tag_id');
            $post->tags()->attach($tag_id);
        });
    }
}
