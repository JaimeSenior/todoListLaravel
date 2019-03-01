<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('tittle',256);
            $table->text('description');
            $table->date('date');
            $table->tinyInteger('isComplete');
            //$table->bigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('Todos');
    }
}
