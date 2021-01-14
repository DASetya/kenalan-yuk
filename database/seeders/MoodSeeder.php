<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mood;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Carbon;

class MoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::first()->id;
        $questions = Question::get();
        $moods = [];

        for ($i=1; $i<=10; $i++) {
            foreach($questions as $question) {
                $moods[] = [
                    'user_id' => $userId,
                    'question_id' => $question->id,
                    'score' => 6,
                    'created_at' => Carbon::create('2021-01-'. sprintf("%02d", $i) .'06:18:22'),
                    'updated_at' => Carbon::create('2021-01-'. sprintf("%02d", $i) .'06:18:22'),
                ];
            }
        }

        Mood::insert($moods);
    }
}
