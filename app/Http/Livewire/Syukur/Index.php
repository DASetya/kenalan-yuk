<?php

namespace App\Http\Livewire\Syukur;

use Livewire\Component;
use App\Models\Syukur;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads, WithPagination;

    protected $listeners = [
        'needRefresh' => '$refresh'
    ];

    public $showModalAddSyukur = false;
    public $story;
    public $image;
    public $currentImage = 'image/placeholder.png';

    public function render()
    {
        $syukurs = Syukur::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.syukur.index', compact('syukurs'));
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
        $this->currentImage = $this->image->temporaryUrl();
    }

    public function store()
    {
        $this->validate([
            'story' => 'required|string',
            'image' => 'nullable|image|max:1024', // 1MB Max
        ]);

        // Upload gambar
        if ($this->image) {
            $path = $this->image->store('syukur');
        }

        $submit = Auth::user()->syukurs()->create([
            'story' => $this->story,
            'image' => $path ?? null,
        ]);

        if ($submit) {
            unset($this->story);
            unset($this->image);
            $this->showModalAddSyukur = false;
        }
    }
}
