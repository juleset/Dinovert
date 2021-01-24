<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Type;
use App\Models\User;
use App\Models\Property;
use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@dinovert.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$aeqOqEGawF.PHjUmouYFDeNYjYV9rK.Z3TzD2kNACUB/t49aeofMi', // MDP : admindinovert
            'remember_token' => Str::random(10),
        ]);

        Type::create(['title' => 'Appartement']);
        Type::create(['title' => 'Maison']);
        Type::create(['title' => 'Enclos à dinos']);

        Category::create(['title' => 'Appartement']);
        Category::create(['title' => 'Maison']);
        Category::create(['title' => 'Enclos à dinos']);

        Article::factory(10)->hasTags(1)->create();
        Property::factory(10)->hasImages(3)->create();

    }
}
