<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 25) as $inder)
        {
            Post::create([
                'user_id' => $faker->numberBetween(1, 15),
                'category_id' => $faker->numberBetween(1, 3),
                'title' => $faker->sentence(1),
                'body' => $faker->sentence(3),
                'slug' => $faker->slug,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
