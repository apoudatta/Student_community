<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->increments('std_id');
            $table->integer('user_id');
            $table->integer('dept_id');
            $table->integer('batch_id');
            $table->string('roll');
            $table->string('semester');   
            $table->string('reg_num');
            $table->string('blood_group');   
            $table->string('profile_pic'); 
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
        Schema::dropIfExists('student_infos');
    }
}
