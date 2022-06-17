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

            $table->string('nombre');
            $table->integer('nalumnos');
            $table->string('flimite');

            $table->unsignedBigInteger('empresa_id')->nullable();

            $table->unsignedBigInteger('proyectograable_id');
            $table->string('proyectograable_type');

            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->primary(['proyectograable_id','proyectograable_type']);//llaves primarias compuestas
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
