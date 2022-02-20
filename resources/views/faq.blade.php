<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>FAQ</title>

</head>

<body>
<div class="header">
    <b>Grace Fomo</b> <br>
    welcome to my website

</div>
<div class="topnav">
    <a href="{{url('welcome')}}">Home</a>
    <a href="{{url('profile')}}">Profile</a>
    <a href="{{url('dashboard')}}">Dashboard</a>
    <a class="active" href="{{url('faq')}}">FAQ</a>
    <a href="{{url('blog')}}">Blog</a>
</div>
<br>
<br>
<h1>
Frequently asked questions
</h1>
<br>
<br>
<ul>
    @foreach($faq as $faqs)
        <li>{{ $faq->question }}</li>
        <li>{{ $faq->answer }}</li>
    @endforeach
</ul>




<div class="bubbleFAQ">
    <div class="dropdown">
        <span>How can you print a document from your laptop at HZ?<br></span>
        <div class="dropdown-content">
            <div class="bubbleFAQ">
                By Simply connecting to one of the printers at school.
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="bubbleFAQ">
    <div class="dropdown">
        <span>How can you scan a document a send it to your laptop at HZ?<br></span>
        <div class="dropdown-content">
            <div class="bubbleFAQ">
                Use the same printer, scan your paper <br> and it should added on yourpc if you do it right.
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="bubbleFAQ">
    <div class="dropdown">
        <span> What do you need to do when you show <br>symptoms of coronavirus?<br></span>
        <div class="dropdown-content">
            <div class="bubbleFAQ">
                Contact the teachers/helpdesk at school and stay home.
                <br>Follow the lessons on stream <br>to compensate for that
                unusual sickness. <br>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="bubbleFAQ">
    <div class="dropdown">
        <span>Can you book a project space in one of the wing?<br> </span>
        <div class="dropdown-content">
            <div class="bubbleFAQ">
                You can book a room on the HZ page after <br>logging in by pressing the
                <br>Selfservice Portal, it should be easy from
                thereon out.
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="bubbleFAQ">
    <div class="dropdown">
         <span> Where are instructions if you want to park your<br> car at the HZ parking lot?<br></span>
             <div class="dropdown-content">
                <div class="bubbleFAQ">
                    You must park your car "across the road",<br> at the parking lot of the former PEZM.
                </div>
            </div>
    </div>
</div>
<br>
<br>
<div class="bubbleFAQ">
    <div class="dropdown">
        <span> where can i see what kind of activities i can do for my EC? <br></span>
             <div class="dropdown-content">
                <div class="bubbleFAQ">
                    you can find it here,(insert link)
                </div>
            </div>
    </div>
</div>
</p>

<br>
<br>
<br>
<br>
<h3>
    If you have more questions, write it here and it will be answer ASAP
</h3>






<div class="formFAQ">
    <form id="formFAQ" action="PHP" method="POST">
        <div class="row">

        </div>
        <div class="input-group">
            <input type="text" name="name" required>
            <label for="name"> Name</label>
        </div>
        <div class="input-group">
            <input type="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <textarea name="message" rows="10" required></textarea>
            <label for="message">Message</label>
        </div>
        <button type="submit"> Submit</button>
    </form>
</div>
<br>
<br>




</body>

</html>
