<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedVitaminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seed_vitamin', function (Blueprint $table) {
            $table->bigInteger('seed_id')->unsigned();
            $table->bigInteger('vitamin_id')->unsigned();

            $table->foreign('seed_id')->references('id')->on('seeds')->onDelete('cascade');
            $table->foreign('vitamin_id')->references('id')->on('vitamins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seed_vitamin');
    }
}
