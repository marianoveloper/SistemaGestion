<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function courses(){
        return $this->hasManyThrough(Course::class, Type::class);
    }

    public function getRouteKeyName(){return 'slug';}
}
