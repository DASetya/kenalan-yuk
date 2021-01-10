<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mood;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class CreateMood extends Component
{
    use WithPagination;

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

        $this->validate([
            'moods.pertanyaan' => "required|array|min:$min",
            'moods.pertanyaan.*' => 'required|integer|min:1|max:6',
        ]);

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
