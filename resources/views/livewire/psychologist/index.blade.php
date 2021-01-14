<div>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            Daftar Psikolog
            <a href="#" class="text-2xl"><i class="far fa-question-circle"></i></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
                <div class="col-start-2 text-center my-auto">
                    <span class="font-bold">Psikolog Di Sekitar</span>
                </div>
            </div>
            @foreach($data as $datum)
                <div
                    wire:click="$emitTo('psychologist.detail', 'showModal', {{ $datum->id }})" 
                    class="bg-white rounded-2xl cursor-pointer grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3"
                >
                    <div class="mx-auto">
                        <img class="w-52 h-32 object-cover" src="{{ $datum->image_path }}" alt="{{ $datum->image }}">
                    </div>
                    <div class="col-span-2 my-auto">
                        <h3 class="text-xl font-bold">{{ $datum->name }}</h3>
                        <span>{{ strip_tags($datum->description) }}</span>
                    </div>
                </div>
                <livewire:psychologist.detail :psychologistId="$datum->id" :key="'detailPsychologist-' . $datum->id"/>
            @endforeach
            {{ $data->links() }}
        </div>
    </div>
</div>
