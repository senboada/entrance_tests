<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
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
        Schema::dropIfExists('ip_addresses');
    }
}
