<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' => 'Programming and Career Orientation',
            'EC' => '2.5',
            'test_name' => 'Assessment',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Computer Science Basics',
            'EC' => '5',
            'test_name' => 'Written Exam',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Programming Basics',
            'EC' => '5',
            'test_name' => 'Case Study',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'EC' => '5',
            'test_name' => 'Case Study',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'EC' => '5',
            'test_name' => 'Project',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Development 1',
            'EC' => '5',
            'test_name' => 'Case Study',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'EC' => '2.5',
            'test_name' => 'Project',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'EC' => '2.5',
            'test_name' => 'Assessment',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'EC' => '2.5',
            'test_name' => 'Report',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'EC' => '3.3',
            'test_name' => 'Portfolio',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'EC' => '3.3',
            'test_name' => 'Project',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'EC' => '3.3',
            'test_name' => 'Assessment',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Personal Professional Development',
            'EC' => '12.5',
            'test_name' => 'Portfolio',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Personality 1',
            'EC' => '1.25',
            'test_name' => 'Portfolio',
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Personality 2',
            'EC' => '1.25',
            'test_name' => 'Portfolio',
        ]);
    }
}
