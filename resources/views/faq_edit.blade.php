@extends('layout')

@section('title_page')

    Frequently asked questions

@endsection


@section('content')

    <h2>
         Edit a Question
    </h2>

<div class="formFAQ">
    <form id="formFAQ" action="/faq/{{$faq->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

        </div>
        <div class="input-group">
            <label for="question"> Questions</label>
            <input type="text" name="question"  value="{{$faq->question}}" required>
        </div>
        <div class="input-group">
            <label for="answer">Answer</label>
            <input type="text" name="answer" required value="{{$faq->answer}}">
        </div>
        <button type="submit"> Submit</button>
    </form>
   <br>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    </br>
</div>
<br>
<br>

@endsection
