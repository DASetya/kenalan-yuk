<?php

namespace App\Http\Livewire\Syukur;

use App\Models\Syukur;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    protected $listeners = ['showModal'];

    public $showModalEditSyukur = false;
    public $syukurId;
    public $story;
    public $image;
    public $currentImage;

    public function render()
    {
        return view('livewire.syukur.edit', ['syukurId' => $this->syukurId]);
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
        $this->currentImage = $this->image->temporaryUrl();
    }

    public function showModal($id)
    {
        if ($id == $this->syukurId) {
            $syukur = Syukur::find($id);
            $this->story = $syukur->story;
            $this->currentImage = $syukur->image_path;
            $this->showModalEditSyukur = true;
        }
    }

    public function update(Syukur $syukur)
    {
        // Validasi input
        $this->validate([
            'story' => 'required|string',
            'image' => 'nullable|image|max:1024', // 1MB Max
        ]);

        // Upload gambar
        if ($this->image) {
            $path = $this->image->store('syukur');
            // Hapus gambar yg lama
            if (Storage::exists($syukur->image)) {
                Storage::delete($syukur->image);
            }
            $syukur->image = $path;
        }

        $syukur->story = $this->story;

        if ($syukur->save()) {
            $this->showModalEditSyukur = false;
            $this->emitTo('syukur.index', 'needRefresh');
        }
    }

    public function delete(Syukur $syukur)
    {
        // Hapus gambar yg lama
        if (Storage::exists($syukur->image)) {
            Storage::delete($syukur->image);
        }

        if ($syukur->delete()) {
            $this->showModalEditSyukur = false;
            $this->emitTo('syukur.index', 'needRefresh');
        }
    }
}
