@foreach(config('students.students') as $student)
   <li>{{$student['nome']}}</li>
@endforeach
