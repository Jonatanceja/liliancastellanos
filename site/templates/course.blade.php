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
        </section>
        
        <!--- Intro del curso -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto z-0 md:z-40 md:-mt-32 md:mb-10 mt-16 md:my-0 relative items-end px-5 md:px-0">
            <div class="col-span-1 relative">
                @if ($image = $page->picture1()->toFile())
                    <picture>
                        <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full" src="{{ $image->url() }}" alt="">
                    </picture>
                @endif
            </div>
            <div class="col-span-1 md:col-span-2 text-left">
                <x-text.base>
                    <h2 class="text-2xl md:text-4xl">🎨 ¡Bienvenida al curso de {{ $page->title() }}</h2>
                    <x-elements.divider />
                    <p>@kt($page->welcome())</p>
                </x-text.base>
            </div>
        </section>

        <!--- Características del curso -->
        <section class="py-10 px-5 md:px-0 space-y-10">
            <x-text.base>
                <h2 class="text-2xl md:text-4xl">@kt($page->title())</h2>
            </x-text.base>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10 max-w-6xl mx-auto relative">
                <div class="col-span-1 md:col-span-2">
                    @if ($image = $page->picture2()->toFile())
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                            <img class="w-full" src="{{ $image->url() }}" alt="">
                        </picture>
                    @endif
                </div>
                <div class="col-span-1 md:col-span-3 space-y-1">
                    @foreach ($page->characteristics()->toStructure() as $spec)
                        <div class="block md:flex md:items-center">
                            <div class="w-full md:w-1/4 md:mx-auto" >
                                @if ($image = $spec->icon()->toFile())
                                    <picture>
                                        <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                                        <img class="w-20 md:mx-auto" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
                                    </picture>
                                @endif
                            </div>
                            <div class="w-full md:w-3/4">
                                <x-text.left>
                                    <div class="dm-serif-display-regular text-xl">@kt($spec->headline())</div>
                                    <div class="text-sm">@kt($spec->text())</div>
                                </x-text.left>
                                <x-elements.divider />
                            </div>
                        </div>
                    @endforeach
                </div>             
            </div>
            <div class="max-w-6xl text-left border border-blue-300 text-white p-5 md:p-10 mx-auto bg-blue-700">
                <x-text.leftLight>
                    <h3 class="text-2xl md:text-4xl text-white">Este curso es para tí si:</h3>
                    <ul class="text-white list-none">
                        @foreach ($page->forYou()->toStructure() as $item)
                        <li><span class="text-blue-300 mr-2"><i class="lni lni-checkmark"></i></span>{{ $item->reason() }}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-start">
                        @foreach ($page->button()->toStructure() as $item)
                        <a href="{{ $item->link() }}">
                            <x-elements.button>{{ $item->text() }}</x-elements.button>
                        </a>                                
                        @endforeach
                    </div>
                </x-text.leftLight>
            </div>
        </section>

        <!--- Programa -->
        <section class="max-w-6xl mx-auto py-10 space-y-10 px-5">
            <x-text.left>
                <h3 class="text-2xl md:text-4xl">Programa</h3>
                <ul class="space-y-5">
                    @foreach ($page->program()->toStructure() as $item)
                        <li class="flex space-x-5 items-top text-lg border-b border-blue-400 py-2">
                            <div class="text-2xl dm-serif-display-regular-italic text-blue-400 mt-1 md:-mt-1">{{ $loop->index + 1 }}/ </div>
                            <div class="dm-serif-display-regular text-base md:text-xl">{{ $item->text() }}</div>
                        </li>
                    @endforeach
                </ul>                
            </x-text.left>
            <div class="bg-blue-100 p-10 max-w-2xl mx-auto border border-blue-300">
                <x-text.base>@kt($page->bonus())</x-text.base>
            </div>
        </section>

        <!--- Requisitos -->
        <section class="max-w-4xl mx-auto py-10 space-y-10 px-5">
            <x-text.base>
                <h3 class="text-2xl md:text-4xl ">@kt($page->heading())</h3>
                <div class="text-2xl md:text-4xl font-bold la-belle-aurore-regular">@kt($page->requirementsText())</div>
            </x-text.base>
        </section>

        <!--- Testimonial -->   
        @if ($image = $page->background()->toFile())  
            <section class="bg-cover bg-center py-24 flex items-center bg-blue-800 my-10 relative" style="background-image: url({{ $image->url() }})">
                <div class="text-white max-w-2xl mx-auto text-center px-5 space-y-10 relative z-20">
                    <div class="prose dm-serif-display-regular-italic prose-invert text-white text-3xl tracking-wider">@kt($page->testimonialText())</div>
                    <x-elements.divider />
                    <div class="text-2xl md:text-4xl la-belle-aurore-regular">{{ $page->user() }}</div>
                </div>
                <div class="bg-black/40 w-full h-full absolute top-0 left-0 z-10"></div>
            </section>
        @endif 

        <!--- Costos -->
        <section class="py-10 px-5">
            <div class="max-w-6xl grid grid-cols-1 md:grid-cols-5 gap-10 mx-auto">
                <div class="col-span-1 md:col-span-2">
                    <a href="{{ $page->video()->toFile()->url() }}" data-fancybox="gallery">
                        <picture>
                            <source srcset="{{ $page->videoCover()->toFile()->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                            <img class="w-full" src="{{ $page->videoCover()->toFile()->url() }}" alt="{{ $page->videoCover()->toFile()->alt() }}">
                        </picture>
                    </a>                    
                </div>
                <div class="col-span-1 md:col-span-3 space-y-5">
                    <div class="font-bold uppercase tracking-wide text-sm text-blue-800">Curso {{ $page->type() }}</div>
                    <x-text.left>
                        <h3 class="text-2xl md:text-4xl">{{ $page->costHeading() }}</h3>
                        <div class="flex items-end dm-serif-display-regular-italic text-2xl md:text-4xl">$ {{ $page->price() }}.00 <span class="text-xl ml-2">USD</span></div>
                    </x-text.left>
                    <ul class="py-5 space-y-2 text-blue-800">
                        @foreach ($page->list()->toStructure() as $item)
                            <li class="font-bold uppercase tracking-wide text-sm"><span class="mr-2 text-amber-400 list-none"><i class="lni lni-star-fill"></i></span>{{ $item->text() }}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-start">
                        @foreach ($page->button2()->toStructure() as $item)
                            <a href="{{ $item->link() }}">
                                <x-elements.button>{{ $item->text() }}</x-elements.button>
                            </a>                            
                        @endforeach
                    </div>                   
                </div>                
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 max-w-xl mt-10 mx-auto gap-5">
                @foreach ($page->include()->toStructure() as $item)
                    <div class="flex space-x-5 items-center">
                        <img class="w-6" src="{{ $item->icon()->toFile()->url() }}" alt="">
                        <div class="text-blue-800 font-semibold">{{ $item->text() }}</div>
                    </div>
                @endforeach
            </div>
        </section>
        @include('partials.faq')
    </main>
@endsection