<div>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            Mood
            <a href="#" class="text-2xl"><i class="far fa-question-circle"></i></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <livewire:mood.create-mood />
            <livewire:mood.list-mood />
        </div>
    </div>
</div>
