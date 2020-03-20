<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $students;
    
    public function __construct(){

        $this->students = [
            [
                'img' => 'https://www.boolean.careers/images/students/biagini.png',
                'nome' => 'Alessandro Biagini',
                'eta' => 25,
                'gender' => 'm',
                'azienda' => 'DISC SPA',
                'ruolo' => 'web developer',
                'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.',
                'slug' => 'alessandro'
            ],
            [
                'img' => 'http://boolean.careers/images/students/poggini.png',
                'nome' => 'Paola Poggini',
                'eta' => 24,
                'gender' => 'f',
                'azienda' => 'Prima Assicurazioni',
                'ruolo' => 'Software engineer',
                'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.',
                'slug' => 'paola'
            ],
            [
                'img' => 'http://boolean.careers/images/students/masetti.png',
                'nome' => 'Loana Masetti',
                'eta' => 36,
                'gender' => 'f',
                'azienda' => 'The Zen Agency',
                'ruolo' => 'web developer',
                'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.',
                'slug' => 'loana'
            ]
        ];
        
    }
    
    public function all(){
        $students = $this->students;
        return response()->json($students);
    }

    public function getAges(){
        $students = $this->students;
        $studentsAge = [];
        foreach ($students as $student) {
            $studentsAge[$student['nome']] = $student['eta'];
        }
        return response()->json($studentsAge);
    }


    // FILTRO

    public function getForAge($age){
        $students = $this->students;
        $studentsFiltered = [];
        foreach ($students as $student) {
            if($student['eta'] == $age) {
                $studentsFiltered[] = $student;
            }
        }
        return response()->json($studentsFiltered);
    }

}
