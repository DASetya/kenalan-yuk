<?php

namespace App\Http\Livewire\Syukur;

use Livewire\Component;
use App\Models\Syukur;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'syukurUpdated' => '$refresh'
    ];

    public $showModalAddSyukur = false;
    public $story;
    public $image;
    public $currentImage = 'image/placeholder.png';

    public function render()
    {
        $syukurs = Syukur::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('livewire.syukur.index', compact('syukurs'));
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
        $this->currentImage = $this->image->temporaryUrl();
    }

    public function submitSyukur()
    {
        $this->validate([
            'story' => 'required|string',
            'image' => 'image|max:1024', // 1MB Max
        ]);

        $path = $this->image->store('syukur');

        $submit = Auth::user()->syukurs()->create([
            'story' => $this->story,
            'image' => $path,
        ]);

        if ($submit) {
            unset($this->story);
            unset($this->image);
            $this->showModalAddSyukur = false;
        }
    }
}
