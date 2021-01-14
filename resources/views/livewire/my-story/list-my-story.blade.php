<div>
    @foreach($data as $datum)
        <div
            wire:click="$emitTo('my-story.edit', 'showModal', {{ $datum->id }})" 
            class="bg-white rounded-2xl cursor-pointer grid overflow-hidden shadow-md sm:rounded-lg my-5 p-3"
        >
            <div class="text-center my-auto">
                <h3 class="text-xl font-bold">{{ $datum->myStoryCategory->name }}</h3>
                <span>{{ $datum->story }}</span>
            </div>
        </div>
        <livewire:my-story.edit :myStoryId="$datum->id" :key="'listMyStory-' . $datum->id"/>
    @endforeach
</div>
