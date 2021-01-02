<div>
    @foreach($syukurs as $syukur)
        <div class="bg-white grid grid-cols-3 gap-5 overflow-hidden shadow-md sm:rounded-lg my-5 p-3">
            <div class="mx-auto">
                <img class="w-52 h-32 object-cover" src="{{ $syukur->image_path }}" alt="{{ $syukur->image }}">
            </div>
            <div class="col-span-2 text-center my-auto">
                <span>{{ $syukur->story }}</span>
            </div>
        </div>
    @endforeach
</div>
