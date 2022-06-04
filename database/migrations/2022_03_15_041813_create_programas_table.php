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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->text('actividades');
            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->enum('status',[1, 2, 3])->default(1);
            $table->unsignedBigInteger('periodo_id');
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('tipo_id')
                ->references('id')
                ->on('tipos')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('periodo_id')
                ->references('id')
                ->on('periodos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('carrera_id')
                ->references('id')
                ->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('programas');
    }
};
