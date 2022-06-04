<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('nombre');
            $table->integer('ncontrol');
            $table->integer('nip');
            $table->string('correo');
            $table->string('telefono');

            $table->unsignedBigInteger('carrera_id')->nullable();
            $table->foreign('carrera_id')
                ->references('id')
                ->on('carreras')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('programa_id')->nullable();
            $table->foreign('programa_id')
                ->references('id')
                ->on('programas')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('alumnos');
    }
};
