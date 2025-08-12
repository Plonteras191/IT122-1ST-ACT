<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;

class studentController extends Controller
{
     public function index(){
        $students = new studentModel();
        $students = $students->all();

        return response()->json($students, 200, [], JSON_PRETTY_PRINT);
    }
    public function store(){

        $student = new studentModel();

        $data = [
            'first_name' => 'Roy',
            'last_name' => 'Ramirez',
            'middle_name' => 'Dela Cruz',
            'gender' => 'Male',
            'dob' => '1995-01-01',
            'age' => '18',
        ];

        $student::create($data);
        return response()->json(['message' => 'Successfully created!'], 200, [], JSON_PRETTY_PRINT);
    }
}
