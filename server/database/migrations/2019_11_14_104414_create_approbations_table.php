<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approbations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bitInteger('user_id')->unsigned();
	    $table->bitInteger('approiver_id')->unsigned();
	    $table->bitInteger('approved')->boolean()->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('approbations');
    }
}
