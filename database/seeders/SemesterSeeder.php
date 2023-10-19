<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SemesterSeeder extends Seeder
{
    public function run()
    {
        $semesters = ['Spring 2023', 'Summer 2023'];

        foreach ($semesters as $semester) {
            DB::table('semesters')->insert([
                'Semester' => $semester,
            ]);
        }
    }
}

