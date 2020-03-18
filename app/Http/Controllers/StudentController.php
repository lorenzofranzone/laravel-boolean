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

    public function show($slug){
        $find=false;
        foreach ($this->students as $student) {
            # code...
            if($student['slug'] == $slug) {
                $find = true;
            }
        }
        if($find){dd('trovato');}else{abort('404');}
    }

    private function getAllStudents(){
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

}
