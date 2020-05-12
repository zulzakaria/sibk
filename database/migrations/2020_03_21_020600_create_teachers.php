<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('nuptk',36)->nullable();
            $table->enum('sex',['L','P']);
            $table->string('placeBirth',191)->nullable();
            $table->date('dateBirth')->nullable();
            $table->string('nik',36);
            $table->string('nip',36)->nullable();
            $table->string('employStatus',128)->nullable();
            $table->string('employType',128)->nullable();
            $table->string('religion',24)->nullable();
            $table->text('street')->nullable();
            $table->string('rt',6)->nullable();
            $table->string('rw',6)->nullable();
            $table->string('subVillage',128)->nullable();
            $table->string('village',128)->nullable();
            $table->string('district',128)->nullable();
            $table->string('postalCode',9)->nullable();
            $table->string('phone',36)->nullable();
            $table->string('handphone',36)->nullable();
            $table->string('email',191)->unique();
            $table->string('photo',254)->nullable();
            $table->enum('status',['1','0']);
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
        Schema::dropIfExists('teachers');
    }
}
