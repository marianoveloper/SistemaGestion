<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatedrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedras', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');//USUARIO
            $table->unsignedBigInteger('unidadacademic_id');//USUARIO
            $table->unsignedBigInteger('category_id');//CATEGORIA QUE PERTENECE carrera o curso
            $table->unsignedBigInteger('categoria_id');//que tipo de categoria lic tec pos
            $table->foreign('unidadacademic_id')->references('id')->on('unidadacademics')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
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
        Schema::dropIfExists('catedras');
    }
}
