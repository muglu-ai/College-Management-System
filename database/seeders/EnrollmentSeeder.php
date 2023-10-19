<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        for ($courseID = 1; $courseID <= 5; $courseID++) {
            for ($studentIndex = 1; $studentIndex <= 10; $studentIndex++) {
                $prn = $courseID * 100 + $studentIndex; // Assuming a simple calculation for unique integers

                DB::table('enrollments')->insert([
                    'StudentPRN' => $prn,
                    'CourseID' => $courseID,
                ]);
            }
        }
    }
}
