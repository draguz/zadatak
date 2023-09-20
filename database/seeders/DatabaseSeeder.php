<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Meal;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\MealSeeder;
use Database\Seeders\MealTagSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\IngredientSeeder;
use Database\Seeders\MealIngredientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            IngredientSeeder::class,
            MealSeeder::class,
            MealIngredientSeeder::class,
            MealTagSeeder::class,
            meals_translationsSeeder::class,
        ]);
    }
}
