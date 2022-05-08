<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('trainer_id');
            $table->unsignedBigInteger('conversation_id');
            $table->string('message');

            $table->foreign('trainer_id')->references('id')->on('trainers');
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
        Schema::dropIfExists('trainer_messages');
    }
}
