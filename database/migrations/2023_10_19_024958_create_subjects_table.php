<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('SubjectID');
            $table->string('SubjectName');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
