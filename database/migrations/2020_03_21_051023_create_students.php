<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->enum('sex',['L','P']);
            $table->string('placeBirth',191);
            $table->date('dateBirth');
            $table->string('email')->unique();
            $table->string('nis',12);
            $table->string('nisn',20);
            $table->year('yearRegister');
            $table->text('address');
            $table->string('phone',20);
            $table->string('photo',254)->nullable();
            $table->string('parentName',191);
            $table->text('parentAddress');
            $table->string('parentPhone',36);
            $table->string('lat',191);
            $table->string('lng',191);
            $table->enum('status',['1','0']);
            $table->timestamps();
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
