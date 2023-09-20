<?php

namespace App\Http\Controllers;

use App\Models\Meal;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class MealsController extends Controller
{
    //



    public function index(Request $request)
    {      

      if($request->with){
        $parametri = $request->with;
        $parametar = explode(",", $parametri);
        $with = [];
        foreach($parametar as $key => $value) { 
          array_push($with, $value);
        } 
        $meal_query = Meal::with($with);  
      }else{
        $meal_query = Meal::find(1);
      }

      if($request->tags){
        $meal_query->WhereHas('tags', function($query) use ($request){
          $query->where('tag_id', '=', $request->tags);
        });
      }

      if($request->per_page){
        $per_page = $request->per_page;
      }else{
        $per_page = 10;
      }

      if($request->diff_time){
          if(is_numeric($request->diff_time)&&($request->diff_time>0)){
            $d = date("Y-m-d", $request->diff_time);
            $meal_query->whereDate('updated_at', '>',  $d);
          }else {
            $meal_query->where('status','=',true);
          } 
      }else{
        $meal_query->where('status','=',true);
      }


      $jela = $meal_query->paginate($per_page);

   
/*
$jela = Meal::with(['category', 'ingredients', 'tags'])
->WhereHas('tags', function($query) use ($request){
  $query->where('tag_id', '=', "$request->tags");
})
->where('status', '=', true)
->paginate($request->per_page);
*/
    return response()->json($jela);

  }

}


