<div>
    <x-jet-modal :maxWidth="500" wire:model="showModalEditSyukur">
        <form wire:submit.prevent="updateSyukur({{ $syukurId }})">
            <div class="px-6 py-4">
                <div class="text-lg text-bold">
                    Edit Gratitude Journal
                </div>
        
                <div class="mt-4">
                    <div class="grid">
                        <div class="mx-auto">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden" name="image"
                                        x-ref="photo"
                                        wire:model="image"
                            />
            
                            <!-- Current Profile Photo -->
                            <div class="grid mt-2">
                                <img src="{{ $currentImage }}" class="rounded-full h-20 w-20 object-cover mx-auto">
                            </div>
                            
                            <div class="grid mt-2 mb-5">
                                <button class="button mx-auto" type="button" x-on:click.prevent="$refs.photo.click()">
                                    Upload Gambar
                                </button>
                                <x-jet-input-error for="image" class="mx-auto" />
                            </div>
                        </div>
                        
                        <textarea wire:model="story" rows="5" placeholder="Ada apa dengan hari ini ?" class="border p-3 shadow-sm w-2/3 mx-auto"></textarea>
                        <x-jet-input-error for="story" class="mx-auto" />
                    </div>
                </div>
            </div>
        
            <div class="px-6 py-4 bg-gray-100 text-right">
                <button type="submit" class="button button-success mr-3">Update <i class="fas fa-plus"></i></button>
                <button wire:click="$toggle('showModalEditSyukur')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
            </div>
        </form>
    </x-jet-modal>
</div>
