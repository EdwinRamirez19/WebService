<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('prioridad');
            $table->string('caracteres',255);
            $table->integer('quanta_id')->unsigned()->default(0);
            $table->foreign('quanta_id')->references('id')->on('quanta')->onDelete('cascade');
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
        Schema::dropIfExists('procesos');
        $table->dropForeign('procesos_quanta_id_foreign');

    }
}
