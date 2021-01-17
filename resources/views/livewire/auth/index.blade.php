<div class="flex text-center justify-center items-center flex-col">
    {{-- Heading --}}
    <h1 class="text-4xl my-5">
        Kenalan Yuk
    </h1>

    {{-- Gambar --}}
    <img src="{{ asset('image/login.png') }}" class="mx-auto" alt="resah">

    {{-- Text Singkat --}}
    <div class="px-4">
        <span class="block font-bold text-xl text-primary">Selamat Datang di Kenalan Yuk</span>
        <span class="block font-bold text-gray-500">Sebuah asisten pribadi yang membantumu dalam menghadapi masalahmu!</span>
    </div>

    {{-- Button --}}
    <div>
        <a href="{{ route('login') }}" class="menus masuk">Masuk</a>
        <a href="{{ route('register') }}" class="menus daftar">Daftar</a>
    </div>
</div>
