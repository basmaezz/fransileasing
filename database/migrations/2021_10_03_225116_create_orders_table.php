<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->enum('salary',[0,1]);
            $table->enum('vehicle',[0,1]);
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('year_id')->references('id')->on('years');
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->foreignId('car_models_id')->references('id')->on('car_models');
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
        Schema::dropIfExists('orders');
    }
}
