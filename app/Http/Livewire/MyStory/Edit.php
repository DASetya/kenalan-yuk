<?php

namespace App\Http\Livewire\MyStory;

use App\Models\MyStory;
use Livewire\Component;
use App\Models\MyStoryCategory;

class Edit extends Component
{
    protected $listeners = ['showModal'];

    public $showModalEdit = false;
    public $myStoryId;
    public $data;
    public $story;
    public $category;

    public function mount()
    {
        $this->data = MyStoryCategory::all();
    }

    public function render()
    {
        return view('livewire.my-story.edit', ['myStoryId' => $this->myStoryId]);
    }

    public function showModal($id)
    {
        if ($id == $this->myStoryId) {
            $myStory = MyStory::find($id);
            $this->story = $myStory->story;
            $this->category = $myStory->my_story_category_id;
            $this->showModalEdit = true;
        }
    }

    public function update(MyStory $MyStory)
    {
        // Validasi input
        $this->validate([
            'category' => 'required|exists:my_story_categories,id',
            'story' => 'required',
        ]);

        $update = $MyStory->update([
            'story' => $this->story,
            'my_story_category_id' => $this->category,
        ]);

        if ($update) {
            $this->showModalEdit = false;
            $this->emitTo('my-story.list-my-story', 'needRefresh');
        }
    }

    public function delete(MyStory $MyStory)
    {
        if ($MyStory->delete()) {
            $this->showModalEdit = false;
            $this->emitTo('my-story.list-my-story', 'needRefresh');
        }
    }
}
