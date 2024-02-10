<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'username' => 'test1@gmail.com',
            'password' => Hash::make('test1@123'),
            'role_name' => 'user',
        ]);

        User::create([
            'id' => 2,
            'username' => '12345',
            'password' => Hash::make('12345@test'),
            'role_name' => 'user',
        ]);

        Quiz::create([
            'id' => 1,
            'title' => 'General knowledge',
            'duration' => '10 minutes',
            'questions' => 5,
        ]);

        Quiz::create([
            'id' => 2,
            'title' => 'PHP questions',
            'duration' => '15 minutes',
            'questions' => 6,
        ]);

        Question::create([
            'id' => 1,
            'quiz_id' => 1,
            'Question' => 'How many rings are on the Olympic flag?',
            'option_a' => '4',
            'option_b' => '5',
            'option_c' => '7',
            'option_d' => '6',
            'correct_option' => 'option_b',
        ]);

        Question::create([
            'id' => 2,
            'quiz_id' => 1,
            'Question' => 'In darts, what is the most points you can score with a single throw?',
            'option_a' => '20',
            'option_b' => '50',
            'option_c' => '60',
            'option_d' => '100',
            'correct_option' => 'option_c',
        ]);

        Question::create([
            'id' => 3,
            'quiz_id' => 1,
            'Question' => 'What is the longest that an elephant has ever lived?',
            'option_a' => '17 years',
            'option_b' => '49 years',
            'option_c' => '142 years',
            'option_d' => '86 years',
            'correct_option' => 'option_d',
        ]);

        Question::create([
            'id' => 4,
            'quiz_id' => 1,
            'Question' => 'Ictheology is the study of?',
            'option_a' => 'Plants',
            'option_b' => 'Animals',
            'option_c' => 'Fish',
            'option_d' => 'All of the above',
            'correct_option' => 'option_c',
        ]);

        Question::create([
            'id' => 5,
            'quiz_id' => 1,
            'Question' => 'What is the capital of Iceland?',
            'option_a' => 'Reykjavik',
            'option_b' => 'Akureyri',
            'option_c' => 'Akranes',
            'option_d' => 'None of the above',
            'correct_option' => 'option_a',
        ]);

        Question::create([
            'id' => 6,
            'quiz_id' => 2,
            'Question' => 'Which of the following operator is used to concatenate two strings?',
            'option_a' => '.',
            'option_b' => '+',
            'option_c' => 'append',
            'option_d' => 'None of the above',
            'correct_option' => 'option_a',
        ]);

        Question::create([
            'id' => 7,
            'quiz_id' => 2,
            'Question' => 'Which of the following function is used to get environment variables in PHP?',
            'option_a' => 'search()',
            'option_b' => 'environment()',
            'option_c' => 'env()',
            'option_d' => 'getenv()',
            'correct_option' => 'option_d',
        ]);

        Question::create([
            'id' => 8,
            'quiz_id' => 2,
            'Question' => 'Which of the following function is used to check if a file exists or not?',
            'option_a' => 'fopen()',
            'option_b' => 'fread()',
            'option_c' => 'file_exist()',
            'option_d' => 'filesize()',
            'correct_option' => 'option_c',
        ]);

        Question::create([
            'id' => 9,
            'quiz_id' => 2,
            'Question' => 'Which of the following method acts as a constructor function in a PHP class?',
            'option_a' => 'class_name()',
            'option_b' => '__construct',
            'option_c' => 'constructor',
            'option_d' => 'None of the above',
            'correct_option' => 'option_b',
        ]);

        Question::create([
            'id' => 10,
            'quiz_id' => 2,
            'Question' => 'What does PHP stand for?',
            'option_a' => 'Private Home Page',
            'option_b' => 'Personal Hypertext Processsor',
            'option_c' => 'PHP: Hypertext Preprocessor',
            'option_d' => 'None of the above',
            'correct_option' => 'option_c',
        ]);

        Question::create([
            'id' => 11,
            'quiz_id' => 2,
            'Question' => 'All variables in PHP start with which symbol?',
            'option_a' => '!',
            'option_b' => '#',
            'option_c' => '&',
            'option_d' => '$',
            'correct_option' => 'option_d',
        ]);
    }
}