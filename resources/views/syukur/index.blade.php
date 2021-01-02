<x-app-layout>
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
                    <a href="#" class="button button-primary float-right mr-3">Tambah <i class="fas fa-plus"></i></a>
                </div>
            </div>
            @livewire('syukur.index')
        </div>
    </div>
</x-app-layout>
