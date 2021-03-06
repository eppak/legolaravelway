<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token')->index();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('seed_id')->unsigned();
            $table->bigInteger('giver_id')->unsigned()->nullable();
            $table->integer('qty')->unsigned()->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
