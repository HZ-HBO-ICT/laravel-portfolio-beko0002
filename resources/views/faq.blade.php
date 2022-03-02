@extends('layout')

@section('title_page')
    faq
@endsection

@section('header')

    Frequently asked questions

    @endsection


    @section('content')


<br>
<br>
{{--// how do i make this to be faqs instead of faq--}}
@foreach($faq as $faq)
<div class="bubbleFAQ">
    <div class="dropdown">
        <span>{{ $faq->question }}</span>
        <div class="dropdown-content">
            <div class="bubbleFAQ">
                {{ $faq->answer }}
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
@endforeach


<br>
<br>
<br>
<br>
<h3>
    If you have more questions, write it here, and it will be answered ASAP
</h3>





<div class="formFAQ">
    <form id="formFAQ" action="PHP" method="POST">
        <div class="row">

        </div>
        <div class="input-group">
            <input
                type="text"
                name="name"
                required
                value="{{old('name')}}">
            <label for="name"> Name</label>

            @error('name')
              <p class="help is-danger">{{$errors->first('name')}}</p>
            @enderror
        </div>
        <div class="input-group">
            <input
                type="email"
                name="email"
                required
                value="{{old('email')}}">
            <label for="email">Email</label>

            @error('email')
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @enderror
        </div>
        <div class="input-group">
            <textarea name="message" rows="10" required></textarea>
            <label for="message">Message</label>
            <input
                type="message"
                name="message"
                required
                value="{{old('message')}}">

            @error('message')
               <p class="help is-danger">{{$errors->first('message')}}</p>
            @enderror
        </div>
        <button type="submit"> Submit</button>
    </form>
</div>
<br>
<br>




</body>

</html>
    @endsection
