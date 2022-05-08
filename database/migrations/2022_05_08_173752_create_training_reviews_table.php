<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_reviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('training_id');
            $table->unsignedBigInteger('trainee_id');

            $table->string('body');
            $table->unsignedTinyInteger('review');

            $table->foreign('training_id')->references('id')->on('trainings');
            $table->foreign('trainee_id')->references('id')->on('trainees');

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
        Schema::dropIfExists('training_reviews');
    }
}
