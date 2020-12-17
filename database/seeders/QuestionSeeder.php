<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = []; // prepare array kosong

        // Prepare data dummy pertanyaan
        for ($i=0; $i<5; $i++) {
            $questions[] = [
                'question' => 'pertanyaan ke-'.($i+1),
                'description' => 'deskripsi pertanyaan ke-'.($i+1)
            ];
        }

        // Insert data dummy ke db
        Question::insert($questions);
    }
}
