<?php

namespace App\Http\Livewire\Mood;

use Livewire\Component;

class Index extends Component
{
    public $data;
    public $labels;

    public function mount()
    {
        $this->data = [12, 19, 3, 5];
        $this->labels = ["20 Mei", "20 Mei", "20 Mei", "20 Mei"];
    }

    public function render()
    {
        return view('livewire.mood.index');
    }
}
