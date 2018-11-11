<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsSchoolClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_school_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->integer('class_id')->unsigned()->index();
            $table->integer('semester_id')->unsigned()->index();
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
        Schema::dropIfExists('students_school_classes');
    }
}
