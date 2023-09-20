<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory as Faker;

class MealTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $tags = Tag::all();
        for ($i=1; $i<=10; $i++){
            for($j=1; $j<=rand(1,5); $j++){
                DB::table('meal_tag')->insert([  
                    'meal_id' => $i,
                    'tag_id' =>$tags->random()->id
                ]);
            }
        }
    }
}
