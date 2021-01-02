<?php

namespace App\Http\Livewire\Syukur;

use Livewire\Component;
use App\Models\Syukur;

class Index extends Component
{
    public function render()
    {
        $syukurs = Syukur::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('livewire.syukur.index', compact('syukurs'));
    }
}
