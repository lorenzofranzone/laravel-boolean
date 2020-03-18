<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    private $students;
    private $genders;

    public function __construct(){
        $this->getAllStudents();
    }


    public function index(){
        // $students = $this->students;
        // return view('students.index', compact('students'));
        return view('students.index');
    }

    public function show($id){
        
    }

    private function getAllStudents(){
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

}
