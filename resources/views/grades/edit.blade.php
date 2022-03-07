@extends('layout')

@section('title_page')

     Edit Grades

@endsection

@section('content')


    <form method="POST" action="/grades/{{$grade->id}}">
        @csrf
        @method('PUT')
        <label for="course_name">
            Course Name:
        </label>
        <input type="text" name="course_name" value="{{$grade->course_name}}">
        @error('course_name')
        <p>
            {{$errors->first('course_name')}}
        </p>
        @enderror

        <label for="test_name">
            Test Name:
        </label>
        <input type="text" name="test_name" value="{{$grade->test_name}}">
        @error('test_name')
        <p>
            {{$errors->first('test_name')}}
        </p>
        @enderror


        <label for="lowest_passing_grade">
            Lowest Passing Grade:
        </label>
        <input type="text" name="lowest_passing_grade" value="{{$grade->lowest_passing_grade}}">
        @error('lowest_passing_grade')
        <p>
            {{$errors->first('lowest_passing_grade')}}
        </p>
        @enderror

        <label for="best_grade">
            Best Grade:
        </label>
        <input type="text" name="best_grade" value="{{$grade->best_grade}}">
        @error('best_grade')
        <p>
            {{$errors->first('best_grade')}}
        </p>
        @enderror

        <label for="passed_at">
            Passed at:
        </label>
        <input type="text" name="passed_at" value="{{$grade->passed_at}}">
        @error('passed_at')
        <p>
            {{$errors->first('passed_at')}}
        </p>
        @enderror

        <input type="submit">
    </form>
    <br>
    <form method="POST" action="/grades/{{ $grade->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
