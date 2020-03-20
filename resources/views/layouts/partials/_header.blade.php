<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <title>Document</title>
</head>
<body>    
      
<div class="container-full">

   <header>
      <div class="logo">
         <a href="{{route('static_page.home')}}" class="logo"></a>
      </div>
      <nav>
         <ul>
            <li><a class="{{(Request::route()->getName() == 'static_page.home') ? 'active' : ''}}" href="{{route('static_page.home')}}">Home</a></li>
            <li><a href="#">Corso</a></li>
            <li><a href="{{route('student.index')}}">Dopo Corso</a></li>
            <li><a href="#">Lezione gratuita</a></li>
            <li><a class="btn btn-green" href="#">Candidati ora</a></li>
         </ul>
      </nav>
      @yield('header')
      
   </header>  