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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('alumno_id')->unique();
            $table->foreign('alumno_id')
                ->references('id')
                ->on('alumnos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('programa_id')->nullable();
            $table->foreign('programa_id')
                ->references('id')
                ->on('programas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onDelete('set null')
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
        Schema::dropIfExists('registros');
    }
};
