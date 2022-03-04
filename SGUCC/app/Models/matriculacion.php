<?php

namespace App\Models;

use App\Models\User;
use App\Models\Resource;
use App\Models\unidadacademic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class matriculacion extends Model
{
    use HasFactory;

    protected $guarded=['id','tipo'];

    const Alumno=1;
    const Docente=2;

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
