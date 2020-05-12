<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateIncident',0);
            $table->string('place',254);
            $table->text('studentDesc');
            $table->text('parentDesc');
            $table->text('teacherDesc');
            $table->string('photo',254);
            $table->timestamps();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('mastercase_id');
            $table->foreign('mastercase_id')->references('id')->on('mastercases');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
