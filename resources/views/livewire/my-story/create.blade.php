<div class="bg-white grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
    <div class="col-start-2 text-center my-auto">
        <span class="font-bold">Kisahku</span>
    </div>
    
    <div>
        <a href="#" class="button button-primary float-right"><i class="fas fa-question"></i></a>
        <button wire:click="$toggle('showModalAdd')" class="button button-primary float-right mr-3">Tambah <i class="fas fa-plus"></i></button>

        <x-jet-modal :id="'modalAddMood'" wire:model="showModalAdd">
            <form wire:submit.prevent="store">
                <div class="px-6 py-4">
                    <div class="text-lg text-bold">
                        Tulis Kisahku
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
            
                <div class="px-6 py-4 bg-gray-100 text-right">
                    <button type="submit" class="button button-success mr-3">Tambah <i class="fas fa-plus"></i></button>
                    <button wire:click="$toggle('showModalAdd')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
                </div>
            </form>
        </x-jet-modal>
    </div>
</div>