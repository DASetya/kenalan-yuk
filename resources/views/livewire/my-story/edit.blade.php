<div>
    <x-jet-modal :maxWidth="500" wire:model="showModalEdit">
        <form wire:submit.prevent="update({{ $myStoryId }})">
            <div class="px-6 py-4">
                <div class="text-lg text-bold">
                    Detail Kisahku
                </div>
        
                <div class="mt-4">
                    <div class="grid">
                        <select name="category" wire:model="category" class="bg-white border p-3 shadow-sm w-2/3 mx-auto rounded-lg">
                            <option>Pilih Tema Kisah</option>
                            @foreach($data as $datum)
                                <option value="{{ $datum->id }}">
                                    {{ $datum->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="category" class="mx-auto" />

                        <div class="py-2"></div>

                        <textarea wire:model="story" rows="5" placeholder="Inilah kisahku" class="border p-3 shadow-sm w-2/3 mx-auto rounded-lg"></textarea>
                        <x-jet-input-error for="story" class="mx-auto" />
                    </div>
                </div>
            </div>
        
            <div class="grid grid-cols-2 px-6 py-4 bg-gray-100">
                <div>
                    <button 
                        onclick="return confirm('Apakah Anda yakin ?') || event.stopImmediatePropagation()"
                        wire:click="delete({{ $myStoryId }})"
                        type="button" 
                        class="button button-danger mr-3"
                    >
                        Hapus <i class="fas fa-trash"></i>
                    </button>
                </div>
                <div class="text-right">
                    <button type="submit" class="button button-success mr-3">Update <i class="fas fa-pen"></i></button>
                    <button wire:click="$toggle('showModalEdit')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
                </div>
            </div>
        </form>
    </x-jet-modal>
</div>
