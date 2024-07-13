<section class="px-5 md:py-10 max-w-6xl mx-auto space-y-10">
    @foreach($page->courses()->toPages() as $relatedPage)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
            <div class="col-span-1">
                @if ($image = $relatedPage->first()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp'])->url() }}" type="image/webp">
                    <img class="w-full" src="{{ $image->url() }}" alt="{{ $relatedPage->title() }}">
                </picture>
                @endif
            </div>
            <div class="col-span-1 md:col-span-2 text-left">
                <x-text.left>
                    <div class="text-4xl font-bold text-blue-800">{{ $relatedPage->category() }}</div>
                    <div class="my-3 text-sm font-bold pb-3">{{ $relatedPage->level() }}</div>
                    <x-elements.divider />
                    <div class="text-xl font-bold my-3">{{ $relatedPage->heading2() }}</div>
                    <x-elements.divider />
                    <div class="py-5">{{ $relatedPage->welcome() }}</div>
                </x-text.left>
                <div class="flex justify-start">
                    <a href="{{ $relatedPage->url() }}" aria-label="Ir a {{ $relatedPage->title() }}">
                        <x-elements.button>Conoce más</x-elements.button>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</section>