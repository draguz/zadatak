<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;


    protected $table = 'meals';

    protected $fillable = ['title', 'description'];
    

    public static $searchable = [
        'title',
        'description',
        'created_at',
        'updated_at',
        'status',
    ];

    public function ingredients() {
        return $this->belongsToMany( Ingredient::class, 'meal_ingredient');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class );
    }

    public function category() {
        return $this->belongsTo(Category::class );
    }

}
