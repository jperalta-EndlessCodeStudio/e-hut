<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cabin_id');
            $table->unsignedBigInteger('client_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->unsignedDecimal('agreed_payment')->default(0);
            $table->unsignedDecimal('real_pay')->default(0);
            $table->enum('is_deleted', ['0', '1', '2', '3'])->default('0');

            $table->timestamps();

            $table->foreign('cabin_id')->references('id')->on('cabins');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
