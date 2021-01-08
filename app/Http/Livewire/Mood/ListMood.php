<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mood;
use Illuminate\Support\Facades\Auth;

class ListMood extends Component
{
    use WithPagination;

    public function render()
    {
        $data = Mood::where('user_id', Auth::id())->paginate(5);
        return view('livewire.mood.list-mood', compact('data'));
    }
}
