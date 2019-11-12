<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvests', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->bigInteger('seed_id')->unsigned();
	    $table->bigInteger('user_id')->unsigned();
	    $table->integer('year')->unsigned();
            $table->integer('qty')->unsigned();
            $table->integer('qty_seed')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('harvests');
    }
}
