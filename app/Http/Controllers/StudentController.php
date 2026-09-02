<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Keyan', 'course' => 'ITRACKB4'],
            ['name' => 'Lhorenz', 'course' => 'ITRACKB4'],
            ['name' => 'Mikko', 'course' => 'ITRACKB4'],
            ['name' => 'Bob', 'course' => 'ITRACKB4'],
        ];

        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        $students = $this->students();

        if (!isset($students[$id])) {
            abort(404);
        }

        return view('students.show', ['student' => $students[$id]]);
    }

    private function students()
    {
        return [
            1 => ['id' => 1, 'name' => 'Keyan Jaoric Rima', 'course' => 'ITRACKB4'],
            2 => ['id' => 2, 'name' => 'Keyan Jaoric', 'course' => 'ITRACKB4'],
            3 => ['id' => 3, 'name' => 'Keyan Rima', 'course' => 'ITRACKB4'],
        ];
    }
}