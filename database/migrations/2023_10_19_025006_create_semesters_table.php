<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id('SemesterID');
            $table->string('Semester');
        });
    }

    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
