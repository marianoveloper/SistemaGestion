<?php

use App\Models\matriculacion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculacions', function (Blueprint $table) {
            $table->id();
            $table->string('correo');//usuario
            $table->enum('tipo',[matriculacion::Alumno,matriculacion::Docente])->default(matriculacion::Alumno);
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');//USUARIO
            $table->unsignedBigInteger('unidadacademic_id');//USUARIO
            $table->unsignedBigInteger('category_id')->nullable();//CATEGORIA QUE PERTENECE
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('unidadacademic_id')->references('id')->on('unidadacademics')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculacions');
    }
}
