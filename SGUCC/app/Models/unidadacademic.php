<?php

namespace App\Models;

use App\Models\sede;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class unidadacademic extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function sede(){

        return $this->belongsTo(sede::class);
    }
}
