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
        Schema::create('carreraables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('carreraable_id');
            $table->string('carreraable_type');

            $table->unsignedBigInteger('carrera_id');

            $table->foreign('carrera_id')
                ->references('id')
                ->on('carreras')
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
        Schema::dropIfExists('carreraables');
    }
};
