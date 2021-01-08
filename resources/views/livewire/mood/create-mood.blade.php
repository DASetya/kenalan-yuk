<div class="bg-white grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
    <div class="col-start-2 text-center my-auto">
        <span class="font-bold">Tingkat Kebahagiaan</span>
    </div>
    
    <div>
        <a href="#" class="button button-primary float-right"><i class="fas fa-question"></i></a>
        <button wire:click="$toggle('showModalAddSyukur')" class="button button-primary float-right mr-3">Tambah <i class="fas fa-plus"></i></button>

        <x-jet-modal :id="'modalAddSyukur'" :maxWidth="500" wire:model="showModalAddSyukur">
            <form wire:submit.prevent="store">
                <div class="px-6 py-4">
                    <div class="text-lg text-bold">
                        Catat Mood Hari Ini
                    </div>
            
                    <div class="mt-4">
                        <table class="min-w-full table-fixed">
                            <thead>
                                <tr class="bg-gray-600 text-white">
                                    <th class="border" rowspan="2">No</th>
                                    <th class="border" rowspan="2">Pertanyaan</th>
                                    <th class="border" colspan="7">Nilai</th>
                                </tr>
                                <tr class="bg-gray-600 text-white">
                                    <th class="border">1</th>
                                    <th class="border">2</th>
                                    <th class="border">3</th>
                                    <th class="border">4</th>
                                    <th class="border">5</th>
                                    <th class="border">6</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<25; $i++)
                                    <tr class="my-2 border-b">
                                        <td class="text-center">{{ $i+1 }}</td>
                                        <td class="text-center">Ini pertanyaan</td>
                                        @for($j=0; $j<6; $j++)
                                            <td class="text-center">
                                                <input class="align-middle" type="radio" name="pertanyaan[{{ $i }}][]">
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-600 text-white">
                                    <th class="border" rowspan="2">No</th>
                                    <th class="border" rowspan="2">Pertanyaan</th>
                                    <th class="border" colspan="7">Nilai</th>
                                </tr>
                                <tr class="bg-gray-600 text-white">
                                    <th class="border">1</th>
                                    <th class="border">2</th>
                                    <th class="border">3</th>
                                    <th class="border">4</th>
                                    <th class="border">5</th>
                                    <th class="border">6</th>
                                </tr>
                            </tfoot>
                        </table>
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