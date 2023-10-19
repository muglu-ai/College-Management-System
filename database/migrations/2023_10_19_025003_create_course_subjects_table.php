<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models;

class CreateCourseSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->foreignId('CourseID')->constrained('courses', 'CourseID');
            $table->foreignId('SubjectID')->constrained('subjects', 'SubjectID');
            $table->primary(['CourseID', 'SubjectID']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_subjects');
    }
}
