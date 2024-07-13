<section class="min-h-screen px-5 py-10 md:py-10 space-y-10" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"data-aos-once="true">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0 items-center max-w-4xl mx-auto relative">
        <x-text.base>
            <div class="la-belle-aurore-regular text-3xl">Hola</div>
            <h1>Soy {{ $site->title() }}</h1>
            <h2 class="px-5">{{ $page->headline() }}</h2>
            <x-elements.divider />
            <div class="px-5">@kt($page->text())</div>
            @foreach ($page->button()->toStructure() as $item)
                <a href="">
                    <x-elements.button>{{ $item->text() }}</x-elements.button>
                </a>
            @endforeach
        </x-text.base>
        <div>
            @if ($images = $page->picture()->toFiles())
                <picture>
                    <source srcset="{{ $images->nth(0)->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                    <img class="w-full" src="{{ $images->nth(0)->url() }}" alt="{{ $site->title() }}">
                </picture>
            @endif
        </div>
    </div>
    <x-text.base>
        <p class="uppercase font-bold">Mis diseños los encuentras en marcas como:</p>
        <x-elements.divider />
    </x-text.base>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-5 items-center max-w-2xl mx-auto" data-aos-duration="500" data-aos-delay="0"data-aos-once="true">
        @foreach ($page->logos()->toFiles() as $logo)
        <img class="mx-auto" src="{{ $logo->url() }}" alt="">
        @endforeach
    </div>
</section>