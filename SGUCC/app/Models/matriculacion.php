<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matriculacion extends Model
{
    use HasFactory;

    protected $guarded=['id','tipo'];

    const Alumno=1;
    const Docente=2;
}
