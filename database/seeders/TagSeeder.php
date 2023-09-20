<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $i=1;
        foreach (range(1,5) as $value){
           
            DB::table('tags')->insert([
                'title' => $faker->word(),
                'slug' => 'tag-'.$i
            ]);
            $i++;
        }
    }
}
