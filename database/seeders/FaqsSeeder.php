<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => ' By Simply connecting to one of the printers at school.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => ' Use the same printer, scan your paper and it should added on yourpc if you do it right.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'What do you need to do when you show symptoms of coronavirus?',
            'answer' => 'Contact the teachers/helpdesk at school and stay home.
                Follow the lessons on stream to compensate for that
                unusual sickness.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Can you book a project space in one of the wing?',
            'answer' => 'You can book a room on the HZ page after logging in by pressing the
               Self service Portal, it should be easy from
                thereon out.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Where are instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'ou must park your car "across the road", at the parking lot of the former PEZM.',
        ]);

        DB::table('faqs')->insert([
            'question' => 'where can i see what kind of activities i can do for my EC? ',
            'answer' => ' you can find it here,(insert link)',
        ]);

    }
}
