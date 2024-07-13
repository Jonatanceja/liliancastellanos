@extends('layouts.default')
@section('content')
<!--- Portada del curso -->
<section class="w-full relative hidden md:block mb-96">
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
    <div class="absolute top-14 left-0 right-0 max-w-xl mx-auto z-40">
        <div class="w-96 mx-auto">
            <picture>
                <source srcset="{{ $page->picture()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                <img class="mx-auto w-full" src="{{ $page->picture()->toFile()->url() }}" alt="{{ $page->picture()->toFile()->alt() }}">
            </picture>
        </div>
    </div>
</section>
<div class="absolute -bottom-36 z-50 max-w-4xl mx-auto text-center inset-x-0 space-y-5 px-5">
    <h1 class="text-blue-800 font-bold text-2xl md:text-6xl dm-serif-display-regular-italic">{{ $site->title() }}</h1>
    <x-elements.divider />
    <x-text.base>
        @kt($page->bio())
    </x-text.base>
    <x-elements.divider />
</div>
<div class="max-w-4xl mx-auto space-y-10 px-5 pb-10">
    <x-text.base>
        <p class="uppercase font-bold">Mis diseños los encuentras en marcas como:</p>
        <x-elements.divider />
    </x-text.base>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-5 items-center max-w-2xl mx-auto" data-aos-duration="500" data-aos-delay="0"data-aos-once="true">
        @foreach (page('home')->children()->findBy('slug', 'presentacion')->logos()->toFiles() as $logo)
            <img class="mx-auto" src="{{ $logo->url() }}" alt="">
        @endforeach
    </div>
</div>
<section class="max-w-4xl mx-auto space-y-10 px-5 py-10">
    <p class="uppercase font-bold text-center text-blue-800 text-2xl">¿Cómo te puedo ayudar?</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        @foreach ($page->related()->toStructure() as $item)
        <div>
            @if ($page = $item->course()->toPage())
                @if ($image = $item->picture()->toFile())
                <a href="{{ $page->url() }}">
                    <picture>
                        <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
                    </picture>
                </a>
                <div class="space-y-5 mt-5">
                    <div class="text-center dm-serif-display-regular text-blue-800 text-2xl">{{ $page->title() }}</div>
                    <x-elements.divider />
                </div>
                @endif
            @endif
        </div>
        @endforeach
        <div></div>
        <div></div>
    </div>
</section>
    

@endsection