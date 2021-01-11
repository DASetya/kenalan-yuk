<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use App\Models\Mood;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CreateMood extends Component
{
    public $showModalAddMood = false;
    public $data;
    public $moods = [];
    public $debug;

    public function mount()
    {
        $this->data = Question::get();
    }

    public function render()
    {
        return view('livewire.mood.create-mood');
    }

    public function store()
    {
        $min = $this->data->count();
        $data = [];
        $today = Carbon::now()->format('Y-m-d H:i:s');

        $this->validate([
            'moods.pertanyaan' => "required|array|min:$min",
            'moods.pertanyaan.*' => 'required|integer|min:1|max:6',
        ]);

        if (Auth::user()->moods()->where(DB::raw('Date(created_at)', '=', DB::raw("Date($today)")))->first()) {
            // data sudah ada
            return;
        }

        foreach ($this->moods['pertanyaan'] as $index => $pertanyaan) {
            $data[] = [
                'question_id' => $index,
                'score' => $pertanyaan,
            ];
        }

        $submit = Auth::user()->moods()->createMany($data);

        if ($submit) {
            unset($this->moods);
            $this->showModalAddMood = false;
        }
    }
}
