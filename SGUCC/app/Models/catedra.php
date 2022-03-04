<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resource;
use App\Models\categoria;
use App\Models\unidadacademic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function categoria(){

        return $this->belongsTo(categoria::class);
    }
}
