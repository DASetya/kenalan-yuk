<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            Hi, {{ auth()->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl text-center py-4 my-5 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="mb-4">Progress Kisahku</h3>
                <span class="text-primary mb-3 block">0%</span>
                {{-- <img src="{{ asset('image/placeholder.png') }}" style="width: 100px; height: 100px;" class="object-cover mx-auto mb-3" alt="persen"> --}}
                <a href="{{ route('my-story.index') }}" class="button button-light">
                    Lanjutkan Pengisian 
                    <i class="fas fa-angle-double-right ml-5"></i>
                </a>
            </div>

            <div class="bg-white rounded-2xl text-center py-4 my-5 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="mb-4">Kebahagiaan</h3>
                <p class="text-primary font-semibold">
                    Sepertinya kamu lupa mengisi tingkat kebahagiaanmu pada hari ini!
                </p>
                <p class="text-primary">
                    Beri tahu kami sekarang yuk tingkat kebahagiaan kamu hari ini!
                </p>
                <a href="{{ route('mood.index') }}" class="button button-light">
                    Lanjutkan Pengisian 
                    <i class="fas fa-angle-double-right ml-5"></i>
                </a>
            </div>

            <div class="bg-white rounded-2xl text-center py-4 my-5 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="mb-4">Syukur</h3>
                <p class="text-primary">Kamu belum mengisi rasa syukur pada hari ini!</p>
                <a href="{{ route('syukur.index') }}" class="button button-light">
                    Lanjutkan Pengisian 
                    <i class="fas fa-angle-double-right ml-5"></i>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
