<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        $courseNames = [
            'Electrical Engineering',
            'Mechanical Engineering',
            'Computer Science Engineering',
            'Civil Engineering',
            'Aerospace Engineering',
        ];

        foreach ($courseNames as $courseName) {
            Course::create([
                'CourseName' => $courseName,
            ]);
        }
    }
}
