@extends('layout')

@section('title_page')

    Grades

@endsection

@section('content')


    <h3>Grades of {{$grade->course_name}}</h3>

    <p>
        Course Name: {{$grade->course_name}} <br>
        Test Name: {{$grade->test_name}} <br>
        Lowest Passing Grade: {{$grade->lowest_passing_grade}} <br>
        Best Grade: {{$grade->best_grade}} <br>
        Passed at: {{$grade->passed_at}} <br>
    </p>
@endsection
