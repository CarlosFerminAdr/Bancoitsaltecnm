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
        Schema::create('proyectogramas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('nalumnos');
            $table->string('flimite');
            $table->unsignedBigInteger('statu_id')->nullable();
            $table->foreign('statu_id')
                ->references('id')
                ->on('status')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
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
        Schema::dropIfExists('proyectogramas');
    }
};
