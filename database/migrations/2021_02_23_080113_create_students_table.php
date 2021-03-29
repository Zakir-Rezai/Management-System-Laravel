<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('email');
            $table->integer('skill_level');
            $table->string('phone');
            $table->string('address');
            $table->date('register_date');
            $table->string('category');
            $table->string('gender');
            $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('students');
    }
}
