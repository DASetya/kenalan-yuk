<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Syukur
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class="bg-white grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
                <div class="col-start-2 text-center my-auto">
                    <span class="font-bold">Gratitude Journal</span>
                </div>
                
                <div>
                    <a href="#" class="button button-primary float-right"><i class="fas fa-question"></i></a>
                    <button wire:click="$toggle('showModalAddSyukur')" class="button button-primary float-right mr-3">Tambah <i class="fas fa-plus"></i></button>

                    <x-jet-modal :id="'modalAddSyukur'" :maxWidth="500" wire:model="showModalAddSyukur">
                        <form wire:submit.prevent="store">
                            <div class="px-6 py-4">
                                <div class="text-lg text-bold">
                                    Tambah Gratitude Journal
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
                                <button type="submit" class="button button-success mr-3">Tambah <i class="fas fa-plus"></i></button>
                                <button wire:click="$toggle('showModalAddSyukur')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
                            </div>
                        </form>
                    </x-jet-modal>

                </div>
            </div>
            @foreach($syukurs as $syukur)
                <div
                    wire:click="$emitTo('syukur.edit', 'showModal', {{ $syukur->id }})" 
                    class="bg-white cursor-pointer grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3"
                >
                    <div class="mx-auto">
                        <img class="w-52 h-32 object-cover" src="{{ $syukur->image_path }}" alt="{{ $syukur->image }}">
                    </div>
                    <div class="col-span-2 text-center my-auto">
                        <span>{{ $syukur->story }}</span>
                    </div>
                </div>
                <livewire:syukur.edit :syukurId="$syukur->id" :key="'listSyukur-' . $syukur->id"/>
            @endforeach
        </div>
    </div>
</div>
