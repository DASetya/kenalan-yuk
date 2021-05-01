<?php

namespace App\Http\Livewire\MyStory;

use App\Models\MyStoryCategory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Create extends Component
{
    public $showModalAdd = false;
    public $data;
    public $story;
    public $category;
    public $debug;

    public function mount()
    {
        $this->data = MyStoryCategory::all();
    }

    public function render()
    {
        return view('livewire.my-story.create');
    }

    public function store()
    {
        $this->validate([
            'category' => 'required|exists:my_story_categories,id',
            'category' => Rule::unique('my_stories', 'my_story_category_id')->where(function ($query) {
                return $query->where('user_id', Auth::id());
            }),
            'story' => 'required',
        ]);

        $submit = Auth::user()->myStories()->create([
            'my_story_category_id' => $this->category,
            'story' => $this->story,
        ]);

        if ($submit) {
            unset($this->category);
            unset($this->story);
            $this->showModalAdd = false;
            $this->emitTo('my-story.list-my-story', 'needRefresh');
        }
    }
}
