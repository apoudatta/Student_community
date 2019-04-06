<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_info', function (Blueprint $table) {
            $table->bigIncrements('teacher_id');
            $table->string('user_id');
            $table->string('dept_id');
            $table->string('designation');
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
        Schema::dropIfExists('teachers_info');
    }
}
