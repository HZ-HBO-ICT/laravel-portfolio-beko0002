<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css\style.css')}}">
    <title>dashboard</title>
</head>
<body>
<div class="header">
    <b>Grace Fomo</b> <br>
    welcome to my website

</div>
<div class="topnav">
    <a href="{{url('welcome')}}">Home</a>
    <a href="{{url('profile')}}">Profile</a>
    <a class="active" href="{{url('dashboard')}}">Dashboard</a>
    <a href="{{url('faq')}}">FAQ</a>
    <a href="{{url('bolg')}}">Blog</a>
</div>

<br><br>




<h1> Grading table </h1>
<br>

<div class="progress">
    <div class="loading">10%</div>
</div>

<br> <br>
<div class="table">
    <table class="center">
        <thead>
        <tr>
            <td>Quartile</td>
            <td>Course</td>
            <td>EC</td>
            <td>Exam</td>
            <td>Grade</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td rowspan="3">1</td>
            <td>program amnd career Orientation</td>
            <td> 2,5</td>
            <td>Assessment</td>
            <td> </td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Writting Exam</td>
            <td></td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td> Case Study</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">2</tdr>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case study</td>
            <td rowspan="2" ></td>
        </tr>
        <tr>
            <td>Project</td>
        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td>Framework Development</td>
            <td>5</td>
            <td>Case study</td>
            <td></td>

        </tr>
        <tr>
            <td rowspan="3">Framework Project</td>
            <td rowspan="3">7,5</td>
            <td> Project</td>
            <td rowspan="3"></td>
        </tr>
        <tr>
            <td>Assessment</td>
        </tr>
        <tr>
            <td>Report</td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td rowspan="3"></td>
        </tr>
        <tr>
            <td>Project</td>
        </tr>
        <tr>
            <td>Assessment</td>
        </tr>
        <tr>
            <td>PPD</td>
            <td>Quartile "the entire year"</td>
            <td>12,5</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">Quartile "Whenever"</td>
            <td>Personal 1</td>
            <td>1,25</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Personal 2</td>
            <td>1,25</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Personality</td>
            <td>There is two courses that you have to hand in whenever you want</td>
            <td>Personality</td>
            <td></td>
            <td></td>
        </tr>

    </table>
</div>

<br>
<br>

<div class="footer">
    <footer>
        made by GRACE FOMO
    </footer>
</div>




</body>
</html>
