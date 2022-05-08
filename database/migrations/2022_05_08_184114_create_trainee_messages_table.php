<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineeMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('trainee_id');
            $table->unsignedBigInteger('conversation_id');
            $table->string('message');

            $table->foreign('trainee_id')->references('id')->on('trainees');
            $table->foreign('conversation_id')->references('id')->on('conversations');

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
        Schema::dropIfExists('trainee_messages');
    }
}
