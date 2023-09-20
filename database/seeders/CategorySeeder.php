<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $i = 1;
        foreach (range(1,6) as $value){
            
            DB::table('categories')->insert([
                'title' => $faker->word(),
                'slug' => 'category-'.$i,
            ]);
            $i++;
        }
    }
}
