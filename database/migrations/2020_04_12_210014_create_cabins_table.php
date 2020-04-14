<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();

            $table->string('name', 120);
            $table->smallInteger('min_capacity')->default(0);
            $table->smallInteger('max_capacity')->default(0);
            $table->string('location', 250)->nullable();
            $table->text('description')->nullable();
            $table->enum('is_deleted', ['0', '1', '2', '3'])->default('0');

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
        Schema::dropIfExists('cabins');
    }
}
