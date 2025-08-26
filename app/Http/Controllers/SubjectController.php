<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SubjectModel;

class SubjectController extends Controller
{
    public function index() {
        return view('modules.subject.index');
    }

    public function create() {
        return view('modules.subject.create');
    }

    public function show() {
        return view('modules.subject.show');
    }



}
