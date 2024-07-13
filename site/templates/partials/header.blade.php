<header class="md:flex py-5 px-5 md:px-10 items-center text-blue-800 space-x-10 bg-orange-50 relative z-50 hidden">
    <div class="dm-serif-display-regular text-3xl flex-none">
        <a href="{{ $site->url() }}" aria-label="Ir a pagina principal">{{ $site->title() }}</a>
    </div>
    <nav class="grow flex space-x-5">
            <ul class="uppercase text-sm poppins-semibold flex list-none space-x-5">
                @foreach ($site->children()->listed() as $item)
                <a class="hover:text-blue-700 transition" href="{{ $item->url() }}" aria-label="Ir a {{ $item->title() }}"><li>{{ $item->title() }}</li></a>
                @endforeach
                <a class="hover:text-blue-700 transition" href="mailto:{{ $site->email() }}" aria-label="Enviar correo"><li>Contacto</li></a>
            </ul>
    </nav>
    <div class="flex-none text-base">
        <div><a href="{{ $site->instagram() }}" target="blank"><i class="lni lni-instagram"></i></a></div>
        <div><a href="{{ $site->tiktok() }}" target="blank"><i class="lni lni-tiktok-alt"></i></a></div>
    </div>
</header>
<div class="fixed top-0 left-0 block bg-blue-800 w-full md:w-auto md:h-72 z-40" x-data="{ open: false }">
    <button class="bg-blue-800 p-5 text-white relative z-40 flex items-center md:block" @click="open = ! open">
        <x-elements.menu />
        <div class="dm-serif-display-regular text-3xl md:flex-none md:transform md:rotate-90 md:py-6 px-5 text-white md:fixed md:top-32 md:-left-16 z-40">
            {{ $site->title() }}
        </div>
    </button>
    <div class="bg-blue-800 fixed top-0 left-0 z-30 grid grid-cols-1 md:grid-cols-3 md:gap-10 p-5 md:p-20 md:w-3/4 h-3/4 mt-20 md:mt-0" x-show="open" x-transition>
        <div class="col-span-1 hidden md:block">
            @if ($image = $site->opengraph()->toFile())
                <img src="{{ $image->url() }}" alt="">    
            @endif
        </div>            
        <div class="text-4xl text-white md:min-w-96 col-span-2 space-y-5">
            <div class="grid grid-cols-2">
                <div>
                    @foreach ($site->children()->listed() as $item)
                        <ul>
                            <a class="hover:text-blue-100 transition" href="{{ $item->url() }}" aria-label="Ir a {{ $item->title() }}"><li class="dm-serif-display-regular">{{ $item->title() }}</li></a>    
                    @endforeach
                        <a class="hover:text-blue-100 transition" href="mailto:{{ $site->email() }}" aria-label="Enviar correo"><li class="dm-serif-display-regular">Contacto</li></a>
                        </ul>
                </div>
                <div class="text-2xl text-white min-w-96">
                    @foreach (page('cursos')->children()->listed() as $item)
                        <ul>
                            <a class="hover:text-blue-100 transition" href="{{ $item->url() }}" aria-label="Ir a {{ $item->title() }}"><li class="dm-serif-display-regular py-2">{{ $item->title() }}</li></a>
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="la-belle-aurore-regular pt-5 border-b border-b-orange-50">
                Hola soy {{ $site->title() }}
            </div>
            <div class="prose prose-invert text-white md:px-0 tracking-wider">{{ $site->description() }}</div>
        </div>

    </div>
</div>