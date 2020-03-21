<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastercases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercases', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->integer('point');
            $table->timestamps();
            $table->unsignedBigInteger('casecategory_id');
            $table->foreign('casecategory_id')->references('id')->on('casecategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastercases');
    }
}
