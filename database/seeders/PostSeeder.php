<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = User::all();
        // Create Faker instance
        $faker = Faker::create();

        // Create 50 posts
        foreach (range(1, 50) as $index) {
            Post::create([
                'author_id' => $users->random()->id,
                'title' => $faker->sentence(6),
                'content' => $faker->paragraphs(3, true),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
}
