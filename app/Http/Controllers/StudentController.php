<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('Course.index', compact('courses'));
    }

    public function getStudentsAndMarks(Request $request)
    {
//        $courseId = $request->get('course_id');
//        $students = Enrollment::where('CourseID', $courseId)->with('student.marks.subject')->get();
        $courseId = $request->get('course_id');
        $students = Enrollment::where('CourseID', $courseId)
            ->with('student.marks.subject', 'student.marks.semester')
            ->get();

        return view('Course.students', compact('students',));
    }
}
