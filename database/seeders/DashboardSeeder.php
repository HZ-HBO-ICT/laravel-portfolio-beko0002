<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
                'quartile' => 'Quartile #1',
                'course_name' => 'Programme and Career Orientation',
                'test_name' => 'Assessment',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 6.5,
                'passed_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        DB::table('grades')->insert([
            'quartile' => 'Quartile #1',
            'course_name' => 'Computer Science Basic',
            'test_name' => 'Written Exam',
            'lowest_passing_grade' => 5.5,
            'best_grade' => 5.4,
            'passed_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('grades')->insert([
            'quartile' => 'Quartile #1',
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study',
            'lowest_passing_grade' => 5.5,
            'best_grade' => 5,
            'passed_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('grades')->insert([
            'quartile' => 'Quartile #1',
            'course_name' => 'Object Orientated Programming',
            'test_name' => 'Case Study',
            'lowest_passing_grade' => 5.5,
            'best_grade' => 5.8,
            'passed_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('grades')->insert([
            'quartile' => 'QuaObject Orientated Programming',
            'test_name' => 'Project',
            'lowest_passing_grade' => 5.5,
            'best_grade' => 7.5,
            'passed_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



    }
}
