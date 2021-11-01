<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('approve', ['yes', 'no']);
            $table->unsignedInteger('answer_id');
            $table->unsignedInteger('answer_question_id');
            $table->timestamps();

            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('answer_question_id')->references('question_id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
