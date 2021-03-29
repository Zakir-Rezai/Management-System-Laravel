<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('student_id')->unsigned()->index();
            $table->string('first_name');
            $table->string('father_name');
            $table->string('trainer');
            $table->date('pay_date');
            $table->integer('fee_amount');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
