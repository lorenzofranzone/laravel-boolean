@extends('layouts.layout')

@section('main')
   <ul>
   @foreach(config('students.students') as $student)
      <li>{{$student['nome']}}</li>
   @endforeach
   </ul>

@endsection
