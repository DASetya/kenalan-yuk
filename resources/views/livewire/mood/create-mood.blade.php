<div class="bg-white rounded-2xl grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
    <div class="col-start-2 text-center my-auto">
        <h2 class="text-primary font-bold">
            Mood
            <button wire:click="$toggle('showModalAddMood')" class="float-right"><i class="fas fa-plus"></i></button>
        </h2>
    </div>
    
    <div>
        <x-jet-modal :id="'modalAddMood'" wire:model="showModalAddMood">
            <form wire:submit.prevent="store">
                <div class="px-6 py-4">
                    <div class="text-lg text-bold">
                        Catat Mood Hari Ini
                    </div>

                    <x-jet-validation-errors />
            
                    <div class="mt-4 max-h-60 overflow-y-scroll">
                        <table class="min-w-full table-fixed">
                            <thead>
                                <tr class="bg-gray-600 text-white">
                                    <th class="border" rowspan="2">No</th>
                                    <th class="border" rowspan="2">Pertanyaan</th>
                                    <th class="border" colspan="7">Nilai</th>
                                </tr>
                                <tr class="bg-gray-600 text-white">
                                    @for($i=1; $i<=6; $i++)
                                        <th class="border">{{ $i }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $datum)
                                    <tr class="my-2 border-b h-10">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $datum->question }}</td>
                                        @for($i=1; $i<=6; $i++)
                                            <td class="text-center">
                                                <input class="align-middle" type="radio" name="pertanyaan[{{ $datum->id }}]" value="{{ $i }}" wire:model="moods.pertanyaan.{{ $datum->id }}">
                                            </td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            
                <div class="px-6 py-4 bg-gray-100 text-right">
                    <button type="submit" class="button button-success mr-3">Tambah <i class="fas fa-plus"></i></button>
                    <button wire:click="$toggle('showModalAddMood')" class="button" type="button">Tutup <i class="fas fa-times"></i></button>
                </div>
            </form>
        </x-jet-modal>
    </div>
</div>