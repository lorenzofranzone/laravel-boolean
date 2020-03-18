@extends('layouts.layout')

@section('main')

<div class="hero">

   <div class="content">
      <h1>Il mondo del lavoro <strong>ti sta aspettando</strong></h1>
      <p>La professione del web developer è molto richiesta. Terminato il corso, i nostri studenti ricevono offerte da aziende pronte ad assumerli in <strong>ambienti di lavoro stimolanti.</strong></p>
   </div>
   
</div>

<div class="numbers">

   <div class="container">
      <div class="box">
         <div class="title">62.000</div>
         <p>Le posizioni di lavoro aperte in ambito ICT in Italia nel triennio 2019-2021.</p>
      </div>
      <div class="box">
         <div class="title">49,1%</div>
         <p>La percentuale delle posizioni aperte sopracitate dedicata agli sviluppatori.</p>
      </div>
      <div class="box">
         <div class="title">12</div>
         <p>I giorni che mediamente trascorrono dalla fine delle lezioni al primo colloquio.</p>
      </div>
   </div>
   
</div>

<div class="students">
   <div class="container">
   @foreach(config('students.students') as $student)
      <div class="student-box">
         <div class="img"><img src="{{$student['img']}}" alt=""></div>
         <div class="name"><strong>{{$student['nome']}} ({{$student['eta']}} anni)</strong></div>
         <div class="company">Assunt{{($student['gender']) == 'f' ? 'a' : 'o'}} da {{$student['azienda']}} come {{$student['ruolo']}}</div>
         <div class="desc">{{$student['descrizione']}}</div>
      </div>
   @endforeach
   </div>
</div>

@endsection
