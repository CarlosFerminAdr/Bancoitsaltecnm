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
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->unsignedBigInteger('proyectograma_id')->unique();

            $table->unsignedBigInteger('convocatoriaable_id');
            $table->string('convocatoriaable_type');

            $table->foreign('proyectograma_id')
                ->references('id')->on('proyectogramas')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['convocatoriaable_id','convocatoriaable_type']);
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
        Schema::dropIfExists('convocatorias');
    }
};
