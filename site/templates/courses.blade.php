@extends('layouts.default')
@section('content')
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
    <div class="absolute top-14 left-0 right-0 max-w-4xl mx-auto z-40 grid grid-cols-1 md:grid-cols-4 items-center gap-0">
        <div class="col-span-1 bg-orange-50 p-5 transform translate-x-5 translate-y-5">
            <x-text.left>
                <h2>Aprende de mi</h2>
                Lorem ipsum dolor sit amet consectetur. Nunc ultrices dignissim nulla et rutrum vitae ut arcu. Massa ipsum cras facilisis sagittis a risus convallis ultrices enim. 
            </x-text.left>
        </div>
        <div class="col-span-1 md:col-span-2">
            <picture>
                <source srcset="{{ $page->picture1()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                <img class="mx-auto w-full" src="{{ $page->picture1()->toFile()->url() }}" alt="{{ $page->picture1()->toFile()->alt() }}">
            </picture>
        </div>
        <div class="col-span-1 transform -translate-x-3 -translate-y-5">
            <picture>
                <source srcset="{{ $page->picture2()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                <img class="w-full" src="{{ $page->picture1()->toFile()->url() }}" alt="{{ $page->picture1()->toFile()->alt() }}">
            </picture>
        </div>
    </div>
</section>
<div class="absolute -bottom-28 z-50 max-w-4xl mx-auto text-center inset-x-0">
    <h1 class="text-blue-800 font-bold text-2xl md:text-6xl dm-serif-display-regular-italic">{{ $page->headline() }}</h1>
</div>
<!--- Cursos destacados -->
<section class="py-10 px-5 mt-96">
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-20">
        <div>
            @foreach ($page->course1()->toPages() as $course)
                <a href="{{ $course->url() }}">
                    <picture>
                        <source srcset="{{ $course->first()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $course->first()->toFile()->url() }}" alt="{{ $course->first()->toFile()->alt() }}">
                    </picture>
                </a>
                <x-text.base>
                    <div class="my-3 text-sm font-bold">{{ $course->title() }}</div>
                    <div class="text-xs my-3">{{ $course->welcome() }}</div>
                    <x-elements.divider />
                    <div class="flex items-center space-x-2 my-3">
                        <div class="font-bold w-1/2"><span class="text-sm">$ </span>{{ $course->price() }}.00<span class="text-xs"> dlls</span></div>
                        <div class="w-1/2 flex justify-end text-blue-800"><a class="text-blue-800" href="{{ $course->url() }}"><i class="lni lni-arrow-right"></i></a></div>
                    </div>
                </x-text.base>
            @endforeach
        </div>
        <div>
            @foreach ($page->course1()->toPages() as $course)
                <a href="{{ $course->url() }}">
                    <picture>
                        <source srcset="{{ $course->first()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $course->first()->toFile()->url() }}" alt="{{ $course->first()->toFile()->alt() }}">
                    </picture>
                </a>
                <x-text.base>
                    <div class="my-3 text-sm font-bold">{{ $course->title() }}</div>
                    <div class="text-xs my-3">{{ $course->welcome() }}</div>
                    <x-elements.divider />
                    <div class="flex items-center space-x-2 my-3">
                        <div class="font-bold w-1/2"><span class="text-sm">$ </span>{{ $course->price() }}.00<span class="text-xs"> dlls</span></div>
                        <div class="w-1/2 flex justify-end text-blue-800"><a class="text-blue-800" href="{{ $course->url() }}"><i class="lni lni-arrow-right"></i></a></div>
                    </div>
                </x-text.base>
            @endforeach
        </div>
        <div>
            @foreach ($page->course1()->toPages() as $course)
                <a href="{{ $course->url() }}">
                    <picture>
                        <source srcset="{{ $course->first()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $course->first()->toFile()->url() }}" alt="{{ $course->first()->toFile()->alt() }}">
                    </picture>
                </a>
                <x-text.base>
                    <div class="my-3 text-sm font-bold">{{ $course->title() }}</div>
                    <div class="text-xs my-3">{{ $course->welcome() }}</div>
                    <x-elements.divider />
                    <div class="flex items-center space-x-2 my-3">
                        <div class="font-bold w-1/2"><span class="text-sm">$ </span>{{ $course->price() }}.00<span class="text-xs"> dlls</span></div>
                        <div class="w-1/2 flex justify-end text-blue-800"><a class="text-blue-800" href="{{ $course->url() }}"><i class="lni lni-arrow-right"></i></a></div>
                    </div>
                </x-text.base>
            @endforeach
        </div>
    </div>
    
</section>
<!-- Curso descritos -->
<section class="py-10">
    @foreach ($page->featured()->toPages() as $item)
    @if ($image = $item->featured()->toFile())
        <div class="bg-blue-800 bg-cover bg-center min-w-1/3 px-5" style="background-image: url({{ $image->url() }})">
    @endif
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-20">
                <div class="col-span-1 bg-orange-50 p-10 space-y-5">
                    <picture>
                        <source srcset="{{ $item->first()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="mx-auto w-full" src="{{ $item->first()->toFile()->url() }}" alt="">
                    </picture>
                    <div class="text-xs font-bold uppercase text-blue-800">{{ $item->title() }}</div>
                    <div class="text-blue-800 dm-serif-display-regular-italic">Curso de {{ $item->category() }}</div>
                    <x-elements.divider />
                    <div class="flex items-center space-x-2 my-3">
                        <div class="font-bold w-1/2 text-blue-800"><span class="text-sm">$ </span>{{ $item->price() }}.00<span class="text-xs"> dlls</span></div>
                        <div class="w-1/2 flex justify-end text-blue-800"><a class="text-blue-800" href="{{ $item->url() }}"><i class="lni lni-arrow-right"></i></a></div>
                    </div>
                </div>
            </div> 
        </div>    
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-20 py-10">
            <div>
                <div class="text-blue-800 uppercase font-bold text-right">Curso de {{ $item->category() }}</div>
                <div class="text-blue-800 dm-serif-display-regular-italic text-6xl text-right">El curso contiene</div>
            </div>
            <div class="border-t border-blue-300 col-span-1 md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-5 pt-5">
                @foreach ($item->program()->toStructure() as $list)
                    <div class="text-blue-800"><span><i class="lni lni-checkmark mr-2"></i></span>{{ $list->text() }}</div>
                @endforeach
            </div>
        </div>         
    @endforeach

</section>
@if ($image = $page->testimonialBackground()->toFile())  
    <section class="bg-cover bg-center py-24 flex items-center bg-blue-800 my-10 relative" style="background-image: url({{ $image->url() }})">
            <div class="text-white max-w-2xl mx-auto text-center px-5 space-y-10 relative z-20">
                <div class="prose dm-serif-display-regular-italic prose-invert text-white text-3xl tracking-wider">@kt($page->testimonialText())</div>
                <x-elements.divider />
                <div class="text-2xl md:text-4xl la-belle-aurore-regular">{{ $page->testimonialUser() }}</div>
            </div>
            <div class="bg-black/40 w-full h-full absolute top-0 left-0 z-10"></div>
    </section>
@endif 

@endsection