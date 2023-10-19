<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create(['SubjectName' => 'Data Structures and Algorithms']);
        Subject::create(['SubjectName' => 'Database Management Systems']);
        Subject::create(['SubjectName' => 'Operating Systems']);
        Subject::create(['SubjectName' => 'Software Engineering']);
        Subject::create(['SubjectName' => 'Computer Networks']);


        Subject::create(['SubjectName' => 'Electric Circuit Analysis']);
        Subject::create(['SubjectName' => 'Digital Signal Processing']);
        Subject::create(['SubjectName' => 'Power Systems']);
        Subject::create(['SubjectName' => 'Control Systems']);
        Subject::create(['SubjectName' => 'Electrical Machines']);

        Subject::create(['SubjectName' => 'Thermodynamics']);
        Subject::create(['SubjectName' => 'Fluid Mechanics']);
        Subject::create(['SubjectName' => 'Machine Design']);
        Subject::create(['SubjectName' => 'Heat Transfer']);
        Subject::create(['SubjectName' => 'Dynamics of Machinery']);

        Subject::create(['SubjectName' => 'Structural Analysis']);
        Subject::create(['SubjectName' => 'Geotechnical Engineering']);
        Subject::create(['SubjectName' => 'Environmental Engineering']);
        Subject::create(['SubjectName' => 'Transportation Engineering']);
        Subject::create(['SubjectName' => 'Construction Management']);


        Subject::create(['SubjectName' => 'Aerodynamics']);
        Subject::create(['SubjectName' => 'Aircraft Structures']);
        Subject::create(['SubjectName' => 'Flight Dynamics and Control']);
        Subject::create(['SubjectName' => 'Propulsion Systems']);
        Subject::create(['SubjectName' => 'Avionics and Systems Integration']);
    }
}
