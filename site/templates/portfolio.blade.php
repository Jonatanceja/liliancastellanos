@extends('layouts.default')
@section('content')
<section class="bg-cover bg-center my-10 relative max-w-6xl mx-auto space-y-10">
    <div class="max-w-6xl mx-auto">
        <p class="text-blue-800 uppercase font-bold">Portafolio</p>
        <h3 class="text-4xl md:text-5xl text-blue-800 w-full md:w-96 italic">@kt($page->heading())</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 max-w-6xl mx-auto relative z-10">
        @foreach ($page->gallery()->toFiles() as $item)
            <div>
                <a href="{{ $item->url() }}" data-fancybox="gallery">
                    <picture>
                        <source srcset="{{ $item->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $item->url() }}" alt="{{ $item->alt() }}">
                    </picture>
                </a>
                <div class="py-5 space-y-5">
                    <h4 class="text-blue-800 text-2xl italic">"{{ $item->caption() }}"</h4>
                    <x-elements.divider />
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
