<section class="px-5 py-10 mx-auto space-y-10 relative z-10">
    @if($relatedPage = $page->courses()->toPage())
        <div class="max-w-xl mx-auto space-y-5">
            <div class="relative">
                @if ($image = $relatedPage->featured()->toFile())
                    <picture>
                        <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                        <img class="w-full relative z-10 pb-5" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
                    </picture>
                @endif
                <h3 class="text-2xl md:text-4xl text-white md:text-blue-300 relative md:absolute z-20 md:w-56 md:bottom-20 md:-right-32 text-center md:text-right">{{ $relatedPage->title() }}</h3>
            </div>
            <div class="relative z-10 space-y-5">
                <x-elements.divider />
                <h2 class="text-2xl text-center text-white italic">{{ $relatedPage->learn() }}</h2>
            </div>
            <x-elements.button>
                Conoce más
            </x-elements.button>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-2/3 z-0 bg-blue-800"></div>
    @endif
</section>