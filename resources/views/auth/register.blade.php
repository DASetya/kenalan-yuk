<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-2 sm:pt-0">
        <div class="text-center w-full flex">
            <a href="{{ route('index') }}" class="text-2xl text-primary my-auto ml-3"><i class="fas fa-chevron-left"></i></a>
            <h1 class="text-4xl font-bold mx-auto">
                Daftar
            </h1>
        </div>
    
        <div class="w-full sm:max-w-md px-6 py-3 overflow-hidden sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-input id="name" class="block mt-1 w-full rounded-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Masukkan Username"/>
                </div>

                <div class="mt-4">
                    <x-jet-input id="email" class="block mt-1 w-full rounded-full" type="email" name="email" :value="old('email')" required placeholder="Masukkan email yang aktif"/>
                </div>

                <div class="mt-4">
                    <x-jet-input id="password" class="block mt-1 w-full rounded-full" type="password" name="password" required autocomplete="new-password" placeholder="Masukkan password"/>
                </div>

                <div class="mt-4">
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full rounded-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi password Anda"/>
                </div>

                <div class="flex items-center justify-center mt-5">
                    <button class="button-plain button-primary ml-4 text-xl font-bold shadow-md">
                        Daftar Sekarang!
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
