@extends('layout')

@section('title_page')

    Grades

@endsection

@section('content')


  @foreach($grades as $grade)
    <p>
        Course Name: {{$grade->course_name}} <br>
        Test Name: {{$grade->test_name}} <br>
        Lowest Passing Grade: {{$grade->lowest_passing_grade}} <br>
        Best Grade: {{$grade->best_grade}} <br>
        Passed at: {{$grade->passed_at}} <br>
    </p>
    <form method="POST" action="/grades/{{$grade->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
    <button>
        <a href="/grades/{{$grade->id}}/edit">Edit</a>
    </button>
  @endforeach

@endsection


