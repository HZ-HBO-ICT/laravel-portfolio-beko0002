@extends('layout')

@section('title_page')
    blog
@endsection

@section('content')

<br><br><br><br><br>

<div class="row">

    <div class="swot">
        <h3>Strengths</h3>
        <p>
        <ul>
            <li>Hard working</li>
            <li>Creative</li>
            <li>Studious</li>
            <li>Ambitious</li>
            <li>I can handle changes well.</li>
            <li>Good listener</li>
        </ul>
        </p>
    </div>
    <div class="swot">
        <h3>Weaknesses</h3>
        <p>
        <ul>
            <li>Bad at public speaking</li>
            <li>Procrastinate easily</li>
            <li>Depressing person sometimes</li>
            <li>Comparing myself to others</li>
            <li>Have high expectation from myself</li>
        </ul>
        </p>
    </div>
</div>
<div class="row">
    <div class="swot">
        <h3>Opportunities</h3>
        <p>
        <ul>
            <li>learning new things </li>
            <li>many jobs’ opportunities</li>
            <li>develop new learning strategies</li>
            <li>making connection with people</li>
        </ul>
        </p>
        <div class="updates">updated 13-10-2021</div>
    </div>
    <div class="swot">
        <h3>Threats</h3>
        <p>
        <ul>
            <li>no experience</li>
            <li>giving up</li>
            <li>bad at communication</li>
            <li>distracted</li>
            <li>hyper independence</li>
        </ul>
        </p>
    </div>
</div>
<br><br><br><br><br><br><br><br>

@foreach($article as $article)
<div class="experience">
    <div class="card">
            <h2><a class="pink " href="/articles/{{$article->id }}">{{$article->title }}</a></h2>
        <p class="blog">{{$article->excerpt}}
        </p>

        {{$article->updated_at}}
        <br><br><br><br>
    </div>
</div>
    @endforeach
    <br><br><br><br><br><br><br><br>

{{--    <div class="experience">--}}
{{--        <div class="card">--}}
{{--            <h2>experience</h2>--}}
{{--            <p class="blog">Experience, I can’t really say that have experience.--}}
{{--                In high school I did informatics for 2 years.--}}
{{--                There I learned mostly about data and design in the first year.--}}
{{--                In the second year I learned about programming. in this time, I learned about variable and data and functions etc.--}}
{{--                In this year I code the game hangman with the language python.--}}
{{--                With this game a got to understand a little how to put codes together and--}}
{{--                how precise you must be while making something that a computer must work with.--}}
{{--                Looking back now I see that the game hangman that I made was very much easy. In consist of a punch of if else statements.--}}
{{--            </p>--}}
{{--            updated 13-10-2021--}}
{{--            <br><br><br><br>--}}
{{--        </div>--}}


{{--        <br><br><br><br><br>--}}
{{--        <div class="working field">--}}
{{--            <div class="card">--}}
{{--                <h2>Working field</h2>--}}
{{--                <p class="blog">--}}
{{--                    Your Surprise--}}
{{--                    What started with personalised songs on an old attic has grown to be the largest online gift shop with personalised gifts.--}}
{{--                    With an assortment of more than 1500 gifts you can always find a cool surprise for any occasion at YourSurprise.--}}
{{--                    And they are making some serious progress in conquering the world!--}}
{{--                    At this very moment YourSurprise is active in over ten countries--}}
{{--                    and are we providing you with the prettiest gifts with name, photo,--}}
{{--                    and logo, whether the gift is personal or for business purposes.--}}
{{--                    These personal gifts make your moments even more special and make you and others feel extra happy.--}}
{{--                    This is also the reason I choose this company compared to others. There is a lot of creative freedom.--}}
{{--                    This is something I appreciate. I don’t see myself working at a company where I can’t show my creative side.--}}
{{--                    The campus is so made that there is a place for everyone to feel at home or at least pleasant.--}}
{{--                    Since the company is international. The company offers many ICT jobs such as E-commerce, IT,--}}
{{--                    and gift development & design. They also have various collaborations with other companies.--}}
{{--                    This makes it possible to custom anything and everything that you want to gift.--}}
{{--                </p>--}}
{{--                updated 13-10-2021--}}
{{--                <br><br><br><br>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <br><br><br><br><br>--}}
{{--        <div class="feedback">--}}
{{--            <div class="card">--}}
{{--                <h2>feedback of my pitch</h2>--}}
{{--                <h3>feedback</h3>--}}
{{--                <p class="blog">--}}
{{--                    I had some delay with my laptop, so I started my website a little later.--}}
{{--                    I could try to find some inspiration on the templates for the styling pf my website.--}}
{{--                    I could use my creativity as motivation. Why I choose to make my website this way.--}}
{{--                    The blog was sadly not done yet. I should try to have other opinion on my website so I might get a different point of view.--}}
{{--                    The functionality and the development environment were good.--}}
{{--                    I could improve my code quality and the adaptabilities of my website.--}}
{{--                    Try to use more classes for styling--}}
{{--                    Try to use some more advanced CSS--}}
{{--                    Move the images to its own direction.--}}
{{--                </p>--}}
{{--                <h3>Improvement on the website</h3>--}}
{{--                <p class="blog">--}}
{{--                    For the improvement I changed the CSS, so every page looks more connected with each other.--}}
{{--                    I work on the missing parts of the website.--}}
{{--                    I add more classes so that I could style curtain parts individually.--}}
{{--                    I made the website more personal. It took me some time to figure it out, but I did it.--}}
{{--                    I add a contact form in case someone has more questions about the school.--}}
{{--                </p>--}}
{{--                updated 13-10-2021--}}
{{--                <br><br><br>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <br><br><br><br><br>--}}



@endsection
