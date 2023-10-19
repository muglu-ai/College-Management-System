<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models;

class CreateEnrollmentsTable extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->foreignId('StudentPRN')->constrained('students', 'PRN');
            $table->foreignId('CourseID')->constrained('courses', 'CourseID');
            $table->primary(['StudentPRN', 'CourseID']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
