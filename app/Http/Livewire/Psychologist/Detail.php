<?php

namespace App\Http\Livewire\Psychologist;

use Livewire\Component;
use App\Models\Psychologist;

class Detail extends Component
{
    protected $listeners = ['showModal'];

    public $showModalDetail = false;
    public $psychologistId;
    public $datum;

    public function render()
    {
        $this->datum = Psychologist::find($this->psychologistId);
        return view('livewire.psychologist.detail');
    }

    public function showModal($id)
    {
        if ($id == $this->psychologistId) {
            $this->showModalDetail = true;
        }
    }
}
