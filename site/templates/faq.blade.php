@extends('layouts.default')
@section('content')
    <main>
        <!--- Portada del curso -->
        <section class="w-full relative hidden md:block">
            @if ($image = $page->cover()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 1920, 'height' => '600', 'crop' => 'center'])->url() }}" type="image/webp">
                    <img class="w-full relative z-40" src="{{ $image->crop(1920, 600)->url() }}" alt="{{ $image->alt() }}">
                </picture>
            @endif
            <div class="absolute mx-auto bottom-0 top-0 left-0 right-0 text-white text-center prose prose-invert z-50 max-w-4xl mt-20">
               <h1 class="md:text-5xl min-w-full">@kt($page->coverText())</h1> 
            </div>
            <div class="bg-black/30 absolute top-0 left-0 w-full h-full z-40"></div>
            <div class="absolute bottom-0 left-0 right-0 max-w-4xl mx-auto z-40 pb-20">
                <h1 class="text-white font-bold text-2xl md:text-6xl tracking-wider">{{ $page->title() }}</h1>
            </div>
        </section>
        <section class="py-10 px-5 max-w-4xl mx-auto">
            <div x-data="{ open: null }" class="space-y-8">
                @foreach ($page->questions()->toStructure() as $item)
                <div x-data="{ open: false }">
                    <button class="flex items-center justify-between w-full p-4 mb-4 text-left font-medium border-b border-blue-300"
                    @click="open = !open">
                        <h5 class="text-blue-800 text-lg tracking-wide">{{ $item->question() }}</h5>
                        <div class="text-blue-800 text-2xl" x-show="!open"><i class="lni lni-chevron-down"></i></div>
                        <div class="text-blue-800 text-2xl" x-show="open"><i class="lni lni-chevron-up"></i></div>
                    </button>
                    <div x-show="open" class="mt-4 text-gray-700 px-4" style="display: none;">
                        <x-text.left>{!! $item->answer() !!}</x-text.left>
                    </div>
                </div>  
                @endforeach
            </div>
        </section>

    </main>
@endsection