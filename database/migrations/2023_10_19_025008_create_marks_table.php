<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->foreignId('SubjectID')->constrained('subjects', 'SubjectID');
            $table->foreignId('StudentPRN')->constrained('students', 'PRN');
            $table->foreignId('SemesterID')->constrained('semesters', 'SemesterID');
            $table->integer('MarksReceived');
            $table->integer('TotalMarks');
            $table->primary(['SubjectID', 'StudentPRN', 'SemesterID']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
