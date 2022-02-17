<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>

<body>

<div class="header">
    <b>Grace Fomo</b> <br>
    welcome to my website

</div>

<div class="topnav">
    <a href="https://hz.nl/en">
        <!--idk how to fix the logo with no borders-->
        <img src=" img/hz-logo2.jpeg" class="center imglogo" width="60px" height="55px">
    </a>
    <a class="{{ Request::path() ==='welcome' ? 'active': '' }}" href="{{url('welcome')}}">Home</a>
    <a class="{{ Request::path() ==='profile' ? 'active': '' }}" href="{{url('profile')}}">Profile</a>
    <a class="{{ Request::path() ==='dashboard' ? 'active': '' }}" href="{{url('dashboard')}}">Dashboard</a>
    <a class="{{ Request::path() ==='faq' ? 'active': '' }}"href="{{url('faq')}}">FAQ</a>
    <a class="{{ Request::path() ==='blog' ? 'active': '' }}"href="{{url('blog')}}">Blog</a>

</div>

@yield('content')

<div class="footer">
    <footer>
        made by GRACE FOMO
    </footer>
</div>

</body>

</html>
