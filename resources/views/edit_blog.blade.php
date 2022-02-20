@extends('layout')

@section('title_page')

    Blog post

@endsection


@section('content')
    <h2>
      Edit a Blog post
    </h2>

    <div class="formFAQ">
        <form id="formFAQ" action="/blog/{{$article->title}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            </div>
            <div class="input-group">
                <label for="title"> Title</label>
                <input type="text" name="title" value="{{$article->title}}" required>
            </div>
            <div class="input-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" name="excerpt" value="{{$article->excerpt}}" required>
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <input type="text" name="body"  value="{{$article->body}}"required>
            </div>
            <button type="submit"> Submit</button>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </form>

@endsection
