<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('description');
            $table->string('model');
            $table->double('price');
            $table->string('image');

            $table->string('color')->nullable();
            $table->string('engine_displacement')->nullable();
            $table->string('max_power')->nullable();
            $table->string('max_torq')->nullable();
            $table->string('no_cylinder')->nullable();
            $table->string('no_gears')->nullable();
            $table->string('seat_height')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('weight')->nullable();
            $table->string('tank_capacity')->nullable();
            $table->string('mileage')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('fuel_type')->nullable();

            $table->boolean('type');
            $table->boolean('status')->default(1);

            $table->integer('user_id');
            $table->integer('category_id');
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
        Schema::dropIfExists('cars');
    }
}
