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
            'first_name' => 'Edmar',
            'last_name' => 'Pacana',
            'middle_name' => 'Molina',
            'gender' => 'Male',
            'dob' => '2003-06-22',
            'age' => '22',
        ];

        $student::create($data);
        return response()->json(['message' => 'Successfully created!'], 200, [], JSON_PRETTY_PRINT);
    }
}
