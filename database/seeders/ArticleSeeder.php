<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i = 0; $i < 100; $i++) {

//        Article::factory(100)->create();

        DB::table('articles')->insert([
            'title' => 'Motivation',
            'excerpt' => 'What is my motivation for this study',
            'body' => 'Why did I choose ICT? is the biggest question to answer this semester.
              There can be multiple answer to this. The first is the I didn’t want to study math.
              The other is that I don’t want do psychology because of my father.
              The reason behind this is that he is not that good of a person, and
              I really wanted to understand why I did certain thing. Later,
              I realised that I wasn’t doing it for me but and at the end of the day it is my future. ',
        ]);

        DB::table('articles')->insert([
            'title' => 'Experience',
            'excerpt' => 'The experience I have with ICT',
            'body' => 'Experience, I can’t really say that have experience.
              In high school I did informatics for 2 years.
              There I learned mostly about data and design in the first year.
              In the second year I learned about programming. in this time, I learned about variable and data and functions etc.
              In this year I code the game hangman with the language python.
              With this game a got to understand a little how to put codes together and
              how precise you must be while making something that a computer must work with.
              Looking back now I see that the game hangman that I made was very much easy. In consist of a punch of if else statements. ',
        ]);

        DB::table('articles')->insert([
            'title' => 'Working field',
            'excerpt' => 'Your Surprise',
            'body' => 'What started with personalised songs on an old attic has grown to be the largest online gift shop with personalised gifts.
            With an assortment of more than 1500 gifts you can always find a cool surprise for any occasion at YourSurprise.
            And they are making some serious progress in conquering the world!
            At this very moment YourSurprise is active in over ten countries
            and are we providing you with the prettiest gifts with name, photo,
            and logo, whether the gift is personal or for business purposes.
            These personal gifts make your moments even more special and make you and others feel extra happy.
            This is also the reason I choose this company compared to others. They a lot of creative freedom.
            This is something I appreciate. I don’t see myself working at a company where I can’t show my creative side.
            The campus is so made that there is a place for everyone to feel at home or at least pleasant.
            Since the company is international. The company offers many ICT jobs such as E-commerce, IT,
            and gift development & design. They also have various collaborations with other companies.
            This makes it possible to custom anything and everything that you want to gift.',
        ]);

        DB::table('articles')->insert([
            'title' => 'Feedback of my pitch',
            'excerpt' => 'feedback',
            'body' => 'I had some delay with my laptop, so I started my website a little later.
            I could try to find some inspiration on the templates for the styling pf my website.
            I could use my creativity as motivation. Why I choose to make my website this way.
            The blog was sadly not done yet. I should try to have other opinion on my website so I might get a different point of view.
            The functionality and the development environment were good.
            I could improve my code quality and the adaptabilities of my website.
            Try to use more classes for styling
            Try to use some more advanced CSS
            Move the images to its own direction.',
        ]);

        DB::table('articles')->insert([
            'title' => 'Improvement on the website',
            'excerpt' => 'Improvement on the website',
            'body' => 'For the improvement I changed the CSS, so every page looks more connected with each other.
            I work on the missing parts of the website.
            I add more classes so that I could style curtain parts individually.
            I made the website more personal. It took me some time to figure it out, but I did it.
            I add a contact form in case someone has more questions about the school.',
        ]);
//        }
    }
}
