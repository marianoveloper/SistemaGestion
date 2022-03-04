<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catedra extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function unidadacademic(){

        return $this->belongsTo(unidadacademic::class);
    }

    public function resource(){

        return $this->morphOne(Resource::class,'resourceable');
    }

     //relacion uno a muchos trae los usuarios en los cursos
     public function user(){
        return $this->belongsTo(User::class);
    }
}
