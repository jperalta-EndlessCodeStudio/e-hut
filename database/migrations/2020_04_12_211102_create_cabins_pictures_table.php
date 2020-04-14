<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins_pictures', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cabin_id');
            $table->string('picture', 120);
            $table->string('thumbnail', 120);

            $table->timestamps();

            $table->foreign('cabin_id')->references('id')->on('cabins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabins_pictures');
    }
}
