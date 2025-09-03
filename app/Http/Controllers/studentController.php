<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;

class studentController extends Controller
{
     public function index() {
        $students = studentModel::latest()->get(); // Get all students
        return view('modules.students.index', compact('students'));
    }

    public function create() {
        return view('modules.students.create');
    }

    public function show() {
        return view('modules.students.show');
    }

    public function store(Request $request, studentModel $studentModel) {
        $validate = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'middle_name' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'age' => 'required|integer',
        ]);

        $studentModel->create([
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'middle_name' => $validate['middle_name'],
            'gender' => $validate['gender'],
            'dob' => $validate['dob'],
            'age' => $validate['age'],
        ]);

        return redirect()->route('students.create')->with('success', 'Student Created Successfully!');

    }
}
