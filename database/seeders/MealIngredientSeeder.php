<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory as Faker;

class MealIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $ingredients = Ingredient::all();
        $jela = Meal::all();

        for ($i=1; $i<=10; $i++){
            $r = rand(1,5);
            for($j=1; $j<=$r; $j++){
                DB::table('meal_ingredient')->insert([  
                    'meal_id' => $i,
                    'ingredient_id' => $ingredients->random()->id
                ]);
            }
        }
    }
}
