<?php

namespace App\Http\Livewire\Psychologist;

use App\Models\Psychologist;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Psychologist::orderBy('name', 'asc')->paginate(10);
        return view('livewire.psychologist.index', compact('data'));
    }
}
