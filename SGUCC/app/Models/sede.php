<?php

namespace App\Models;

use App\Models\unidadacademic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sede extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    //de uno a muchos
    public function unidadacademics(){

        return $this->hasMany(unidadacademic::class);
    }
}
