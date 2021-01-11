<?php

namespace App\Http\Livewire\MyStory;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ListMyStory extends Component
{
    use WithPagination;

    protected $listeners = [
        'needRefresh' => '$refresh'
    ];

    public function render()
    {
        $data = Auth::user()->myStories()->paginate(10);
        return view('livewire.my-story.list-my-story', compact('data'));
    }
}
