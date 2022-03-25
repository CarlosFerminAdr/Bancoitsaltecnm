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
        Schema::create('periodo_proyectograma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('periodo_id');
            $table->foreign('periodo_id')
                ->references('id')
                ->on('periodos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('proyectograma_id');
            $table->foreign('proyectograma_id')
                ->references('id')
                ->on('proyectogramas')
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
        Schema::dropIfExists('periodo_proyectograma');
    }
};
