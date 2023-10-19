<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            for ($i = 1; $i <= 10; $i++) {
                $prn = intval($course->id . sprintf('%02d', $i)); // Assuming course ID is a number

                // Check if the PRN already exists
                while (Student::where('PRN', $prn)->exists()) {
                    $i++; // Increment to create a new PRN
                    $prn = intval($course->id . sprintf('%02d', $i));
                }

                Student::create([
                    'Name' => "Student {$i} - {$course->CourseName}",
                    'Roll' => "Roll{$i}",
                    'PRN' => $prn,
                    'Email' => "student{$i}@example.com",
                    'Password' => bcrypt('password'), // Default password is 'password'
                    'Address' => "Address {$i}",
                ]);
            }
        }
    }
}
