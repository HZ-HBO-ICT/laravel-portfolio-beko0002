@extends('layout')

@section('title_page')

    Frequently asked questions

@endsection


@section('content')

    <h2>
        Add a new Question
    </h2>

    <div class="formFAQ">
    <form id="formFAQ" action="/faq" method="POST">
        @csrf
        <div class="row">
        </div>
        <div class="input-group">
            <label for="question"> Questions</label>
            <input type="text" name="question" required>
        </div>
        <div class="input-group">
            <label for="answer">Answer</label>
            <input type="textl" name="answer" required>
        </div>
        <button type="submit"> Submit</button>
    </form>


@endsection



