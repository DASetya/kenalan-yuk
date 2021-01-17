<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-2 sm:pt-0">
        <div class="flex text-center w-full sm:max-w-md">
            <a href="{{ route('index') }}" class="text-2xl text-primary my-auto ml-3"><i class="fas fa-chevron-left"></i></a>
            <h1 class="text-4xl font-bold mx-auto">
                Masuk
            </h1>
        </div>
    
        <div class="w-full sm:max-w-md px-6 py-3 sm:rounded-lg">
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-jet-input id="email" class="block mt-1 w-full rounded-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Masukkan Email" />
                </div>
    
                <div class="mt-4">
                    <x-jet-input id="password" class="block mt-1 w-full rounded-full" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Password" />
                </div>
    
                {{-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}
    
                <div class="flex items-center justify-center mt-4">
                    {{-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}
    
                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        Belum punya akun ?, Daftar
                    </a> --}}

                    <button class="button-plain button-primary text-xl font-bold shadow-lg w-1/2">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
