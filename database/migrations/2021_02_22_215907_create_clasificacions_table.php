<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('libros', function (Blueprint $table) {
            $table->unsignedBigInteger('id_editorial');
            $table->foreign('id_editorial')->references('id')->on('editorials');
        });
        Schema::table('libros', function (Blueprint $table) {
            $table->unsignedBigInteger('id_clasificacion');
            $table->foreign('id_clasificacion')->references('id')->on('clasificacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificacions');
    }
}
