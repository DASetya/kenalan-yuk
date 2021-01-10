<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'description' => 'deskripsi pertanyaan ke-'.($i+1),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        // Insert data dummy ke db
        Question::insert($questions);
    }
}
