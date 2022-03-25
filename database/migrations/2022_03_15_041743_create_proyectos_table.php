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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->text('objetivo');
            $table->text('problematica');
            /*
            $table->unsignedBigInteger('proyectograma_id')->unique();
            $table->foreign('proyectograma_id')
                ->references('id')
                ->on('proyectogramas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            */
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
        Schema::dropIfExists('proyectos');
    }
};
