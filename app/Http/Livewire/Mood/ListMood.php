<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mood;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListMood extends Component
{
    use WithPagination;

    public $data;
    public $debug;

    public function mount()
    {
        $this->data = Mood::where('user_id', Auth::id())
            ->groupBy(DB::raw('Date(created_at)'), 'question_id')
            ->get();
    }

    public function render()
    {
        return view('livewire.mood.list-mood');
    }
}
