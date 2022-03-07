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
                <input
                    type="text"
                    name="title"
                    required
                    value="{{old('title')}}">

                @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                @enderror

            </div>
            <div class="input-group">
                <label for="excerpt">Excerpt</label>
                <input
                    type="text"
                    name="excerpt"
                    required
                    value="{{old('excerpt')}}">

                @error('excerpt')
                   <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                @enderror
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <input
                    type="text"
                    name="body"
                    required
                    value="{{old('body')}}">

                @error('body')
                   <p class="help is-danger">{{$errors->first('body')}}</p>
                @enderror
            </div>
            <button type="submit"> Submit</button>
        </form>

@endsection
