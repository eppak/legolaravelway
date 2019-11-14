<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seed_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('seed_id')->unsigned();
	    $table->bigInteger('user_id')->unsigned();

            $table->foreign('seed_id')->references('id')->on('seeds')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seed_user');
    }
}
