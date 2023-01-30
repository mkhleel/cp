<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'News', 'slug' => 'news'],
            ['title' => 'Sports', 'slug' => 'sports'],
            ['title' => 'Entertainment', 'slug' => 'entertainment'],
            ['title' => 'Technology', 'slug' => 'technology'],
            ['title' => 'Business', 'slug' => 'business'],
        ];
        DB::table('categories')->insert($data);

        // Generate 1000 posts
        for ($i = 1; $i <= 100; $i++) {
            DB::table('skills')->insert([
                'title' => "Skill $i",
                'body' => "Content for skill $i",
                'user_id' => rand(1, 5),
                'category_id' => rand(1, 5)
            ]);
        }

    }
}
