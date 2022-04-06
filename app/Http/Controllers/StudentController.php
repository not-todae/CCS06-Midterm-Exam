<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        

        return view('midtermfinals', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAveragegrade($grade1, $grade2)
    {
        $average = ($grade1 + $grade2 ) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;

        $student1_average = $this->computeAveragegrade($request->student1_midterm, $request->student1_finals);
        $student2_average = $this->computeAveragegrade($request->student2_midterm, $request->student2_finals);
        $student3_average = $this->computeAveragegrade($request->student3_midterm, $request->student3_finals);
        $student4_average = $this->computeAveragegrade($request->student4_midterm, $request->student4_finals);
        $student5_average = $this->computeAveragegrade($request->student5_midterm, $request->student5_finals);

        return view('grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // student 1 midterm finals
            'student1_midterm' => $request->student1_midterm,
            'student1_finals' => $request->student1_finals,
            'student1_average' => $student1_average,
            // student 2 midterm finals
            'student2_midterm' => $request->student2_midterm,
            'student2_finals' => $request->student2_finals,
            'student2_average' => $student2_average,
            // student 3 midterm finals
            'student3_midterm' => $request->student3_midterm,
            'student3_finals' => $request->student3_finals,
            'student3_average' => $student3_average,
            // student 4 midterm finals
            'student4_midterm' => $request->student4_midterm,
            'student4_finals' => $request->student4_finals,
            'student4_average' => $student4_average,
            // student 5 midterm finals
            'student5_midterm' => $request->student5_midterm,
            'student5_finals' => $request->student5_finals,
            'student5_average' => $student5_average
        ]);
    }
}

