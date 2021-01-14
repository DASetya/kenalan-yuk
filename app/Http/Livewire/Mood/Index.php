<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use App\Models\Mood;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;

class Index extends Component
{
    public $data = [];
    public $labels = [];
    public $reverse = [6, 5, 4, 3, 2, 1];
    public $debug;

    public function mount()
    {
        $moods = Mood::with('question')->where('user_id', Auth::id())
            ->groupBy(DB::raw('Date(created_at)'), 'question_id')
            ->get()->groupBy(function ($mood) {
                return $mood->created_at->toDateTimeString();
            });

        $totalQuestion = Question::count();
        $tempScore = 0;
        
        foreach($moods as $days) {
            foreach ($days as $mood) {
                // Cek apakah reverse
                if ($mood->question->reverse) {
                    $tempScore += $this->reverse[$mood->score - 1];
                } else {
                    $tempScore += $mood->score;
                }
            }
            $this->data[] = $tempScore / $totalQuestion;
            $this->labels[] = $days->first()->created_at->format('d M');
            $tempScore = 0;
        }
    }

    public function render()
    {
        return view('livewire.mood.index');
    }
}
