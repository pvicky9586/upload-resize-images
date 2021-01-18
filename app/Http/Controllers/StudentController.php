<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
    	return view('crud.add-student');
    }
}
