@extends('layout')

@section('content')

    <div class="experience">
        <div class="card">

                <h2>{{$article->title }}</h2>
                <p class="blog">{{$article->body}}
                </p>
                updated 10-10-2021
                <br><br><br><br>
        </div>
@endsection
