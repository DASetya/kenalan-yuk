<div>
    {{ $debug }} <br>
    {{ $data }}

    {{-- @foreach($data as $datum)
        <div
            wire:click="$emitTo('syukur.edit', 'showModal', {{ $datum->id }})" 
            class="bg-white cursor-pointer grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3"
        >
            <div class="mx-auto">
                <img class="w-52 h-32 object-cover" src="{{ $datum->image_path }}" alt="{{ $datum->image }}">
            </div>
            <div class="col-span-2 text-center my-auto">
                <span>{{ $datum->story }}</span>
            </div>
        </div>
        <livewire:syukur.edit :syukurId="$datum->id" :key="'listSyukur-' . $datum->id"/>
    @endforeach --}}
</div>
