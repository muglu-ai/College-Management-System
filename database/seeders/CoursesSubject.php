<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSubject extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $courses = Course::all();
        $subjects = Subject::all();

        foreach ($courses as $course) {
            $randomSubjects = $subjects->shuffle()->take(5); // Adjust the number as needed

            foreach ($randomSubjects as $index => $subject) {
                $serialOrder = $index + 1;

                $course->subjects()->attach($subject->id, ['serial_order' => $serialOrder]);
            }
        }
    }
}
