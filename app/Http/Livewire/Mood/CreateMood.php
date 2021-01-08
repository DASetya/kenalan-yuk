<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mood;
use Illuminate\Support\Facades\Auth;

class CreateMood extends Component
{
    use WithPagination;

    public $showModalAddSyukur = false;
    public $story;

    public function render()
    {
        return view('livewire.mood.create-mood');
    }
}
