@extends('layout')

@section('title_page')

    Blog post

@endsection


@section('content')

    <h2>
        Add a new Blog post
    </h2>

    <div class="formFAQ">
        <form id="formFAQ" action="/articles" method="POST">
            @csrf
            <div class="row">
            </div>
            <div class="input-group">
                <label for="title"> Title</label>
                <input type="text" name="title" required>
            </div>
            <div class="input-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" name="excerpt" required>
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <input type="text" name="body" required>
            </div>
            <button type="submit"> Submit</button>
        </form>

@endsection
