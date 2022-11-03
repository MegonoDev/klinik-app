<div {{ $attributes->merge(["class" => "p-6 h-32 w-full bg-white rounded-lg border border-gray-200 shadow-md hover:scale-105 transition ease-in"]) }}>
    <a href="#">
        <div class="flex justify-start items-center text-dark hover:text-primary">
            {{-- <i class="fa-solid fa-book fa-2x mr-2"></i> --}}
            {{ $icon }}

            <h2 class="font-bold text-xl">
                {{ $slot }}
            </h2>
        </div>
    </a>
</div>