<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name',120);
            $table->string('city',120)->nullable();
            $table->string('state',120)->nullable();
            $table->string('country',120)->nullable();
            $table->string('phone',120)->nullable();
            $table->string('email',120)->nullable();
            $table->smallInteger('sons')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
