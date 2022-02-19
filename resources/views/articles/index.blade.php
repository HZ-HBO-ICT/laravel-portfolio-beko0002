@extends('layout')

@section('content')

<div class="experience">
    <div class="card">
        @foreach($articles as $article)
            <h2><a href="/ articles/{{$article->id }}">{{$article->title }} </a></h2>
{{--            <p class="blog">{{$article->excerpt}}--}}
{{--            </p>--}}
            updated 10-10-2021
            <br><br><br><br>
        @endforeach
    </div>

@endsection
