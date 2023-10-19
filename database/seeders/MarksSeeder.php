<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Mark;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $courses = Course::all();
        $semesters = Semester::all();

        foreach ($courses as $course) {
            $students = $course->students()->take(10)->get();
            $subjects = $course->subjects()->inRandomOrder()->take(5)->get();

            foreach ($students as $student) {
                foreach ($semesters as $semester) {
                    foreach ($subjects as $subject) {
                        Mark::create([
                            'subject_id' => $subject->id,
                            'student_prn' => $student->PRN,
                            'semester_id' => $semester->id,
                            'marks_received' => rand(40, 100),
                            'total_marks' => 100,
                        ]);
                    }
                }
            }
        }
    }
}
