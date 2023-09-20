<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory as Faker;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        $faker = Faker::create();

        $categories = Category::all();
        $br = 1;
        foreach (range(1,10) as $value){
            DB::table('meals')->insert([
                'title' => 'Naziv jela '.$br.' na Hr jeziku',
                'description' =>'Opis jela '.$br.' na Hr jeziku',
                'category_id' => $categories->random()->id,
                'status' => true,
                'created_at' => $faker->dateTimeBetween("-1 day" , now()),
                'updated_at' => $faker->dateTimeBetween("-1 day" , now())
            ]);
            $br++;
        }
    }
}
