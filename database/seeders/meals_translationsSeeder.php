<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class meals_translationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meals = Meal::all();

        foreach($meals as $meal){
            DB::table('meals_translations')->insert([
                'meal_id' => $meal->id,
                'locale' => 'en',
                'naziv' =>'Title of meal '.$meal->id.' on en '
            ]);
        }
    }
}
