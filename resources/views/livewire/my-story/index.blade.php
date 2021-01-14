<div>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            Kisahku
            <a href="#" class="text-2xl"><i class="far fa-question-circle"></i></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <livewire:my-story.create />
            <livewire:my-story.list-my-story />
        </div>
    </div>
</div>
