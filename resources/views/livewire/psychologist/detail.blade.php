<div>
    <x-jet-modal :maxWidth="500" wire:model="showModalDetail">
        <div class="px-6 py-4">
            <div class="text-lg text-bold">
                Detail Psikolog
            </div>
    
            <div class="mt-4">
                <div class="grid">
                    <div class="mx-auto">
                        <h3 class="text-lg font-bold text-center">{{ $datum->name }}</h3>
                        <img class="w-52 h-32 object-cover my-2 mx-auto" src="{{ $datum->image_path }}" alt="{{ $datum->image }}">
                        <div class="px-3">
                            {!! $datum->description !!}
                        </div>
                        <div class="my-2"></div>
                        {!! $datum->gmap !!}
                    </div>
                </div>
            </div>
        </div>
    
        <div class="grid px-6 py-4 bg-gray-100">
            <div class="text-right">
                <button wire:click="$toggle('showModalDetail')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
            </div>
        </div>
    </x-jet-modal>
</div>
