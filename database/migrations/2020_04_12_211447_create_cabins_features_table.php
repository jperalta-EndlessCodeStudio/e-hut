<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins_features', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cabin_id');
            $table->unsignedBigInteger('feature_id');

            $table->timestamps();

            $table->foreign('cabin_id')->references('id')->on('cabins');
            $table->foreign('feature_id')->references('id')->on('features');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabins_features');
    }
}
