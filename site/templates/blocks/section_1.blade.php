<section class="px-5 md:py-10">
    <x-text.base>
        <h2>@kt($page->headline())</h2>
    </x-text.base>

    <div class="grid grid-cols-1 md:grid-cols-4 max-w-6xl gap-10 md:gap-20 mx-auto items-end md:-mt-20">
        @if($relatedPage = $page->course1()->toPage())
        @php
            $tags = $relatedPage->category()->split();
            $icons = page('cursos')->icons()->toStructure()->filter(function($icon) use ($tags) {
                return in_array($icon->category()->value(), $tags);
            });
        @endphp
        <div class="col-span-1 space-y-5">
            <div class="relative">
                <a href="{{ $relatedPage->url() }}">
                    @if ($image = $relatedPage->featured()->toFile())
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400,])->url() }}" type="image/webp">
                            <img class="w-full md:mt-44 pb-6" src="{{ $image->crop(500, 800)->url() }}" alt="{{ $relatedPage->title() }}">
                        </picture>
                    @endif
                </a>
                <!-- Aqui va el icono del curso -->
                @if ($icons->count() > 0)
                    @foreach ($icons as $icon)
                        @if ($iconFile = $icon->icon()->toFile())
                            <img class="w-1/4 md:w-1/3 absolute -top-5 md:-left-5 left-0" src="{{ $iconFile->url() }}" alt="{{ $relatedPage->title() }}">
                        @endif
                    @endforeach
                @else
                    <img class="w-1/3 absolute -top-5 -left-5" src="/images/placeholder.jpg" alt="">
                @endif
            </div>
            <a href="{{ $relatedPage->url() }}" aria-label="Ir a {{ $relatedPage->title() }}">
                <x-text.base>
                    <x-elements.divider />
                    <h3 class="mt-3">{{ $relatedPage->title() }}</h3>
                    <x-elements.divider />
                </x-text.base>
            </a>
        </div>
        @endif

        <!--- fin de item 1 -->

        @if($relatedPage = $page->featured()->toPage())
        @php
            $tags = $relatedPage->category()->split();
            $icons = page('cursos')->icons()->toStructure()->filter(function($icon) use ($tags) {
                return in_array($icon->category()->value(), $tags);
            });
        @endphp
        <div class="col-span-1 md:col-span-2 space-y-5">
            <div class="relative">
                <a href="{{ $relatedPage->url() }}">
                    @if ($image = $relatedPage->featured()->toFile())
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 600,])->url() }}" type="image/webp">
                            <img class="w-full md:mt-44 pb-6" src="{{ $image->crop(600, 800)->url() }}" alt="{{ $relatedPage->title() }}">
                        </picture>
                    @endif
                </a>
                <!-- Aqui va el icono del curso -->
                @if ($icons->count() > 0)
                    @foreach ($icons as $icon)
                        @if ($iconFile = $icon->icon()->toFile())
                            <img class="w-1/4 md:w-1/5 absolute -top-5 md:-left-5 left-0" src="{{ $iconFile->url() }}" alt="{{ $relatedPage->title() }}">
                        @endif
                    @endforeach
                @else
                    <img class="w-1/3 absolute -top-5 -left-5" src="/images/placeholder.jpg" alt="">
                @endif
            </div>
            <a href="{{ $relatedPage->url() }}" aria-label="Ir a {{ $relatedPage->title() }}">
                <x-text.base>
                    <x-elements.divider />
                    <h3 class="mt-3">{{ $relatedPage->title() }}</h3>
                    <x-elements.divider />
                </x-text.base>
            </a>
        </div>
        @endif
 
        <!--- fin de item 2 -->

        @if($relatedPage = $page->course3()->toPage())
        @php
            $tags = $relatedPage->category()->split();
            $icons = page('cursos')->icons()->toStructure()->filter(function($icon) use ($tags) {
                return in_array($icon->category()->value(), $tags);
            });
        @endphp
        <div class="col-span-1 space-y-5">
            <div class="relative">
                <a href="{{ $relatedPage->url() }}">
                    @if ($image = $relatedPage->featured()->toFile())
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400,])->url() }}" type="image/webp">
                            <img class="w-full md:mt-44 pb-6" src="{{ $image->crop(500, 800)->url() }}" alt="{{ $relatedPage->title() }}">
                        </picture>
                    @endif
                </a>
                <!-- Aqui va el icono del curso -->
                @if ($icons->count() > 0)
                    @foreach ($icons as $icon)
                        @if ($iconFile = $icon->icon()->toFile())
                            <img class="w-1/4 md:w-1/3 absolute -top-5 md:-left-5 left-0" src="{{ $iconFile->url() }}" alt="{{ $relatedPage->title() }}">
                        @endif
                    @endforeach
                @else
                    <img class="w-1/4 md:w-1/3 absolute -top-5 md:-left-5 left-0" src="/images/placeholder.jpg" alt="">
                @endif
            </div>
            <a href="{{ $relatedPage->url() }}" aria-label="Ir a {{ $relatedPage->title() }}">
                <x-text.base>
                    <x-elements.divider />
                    <h3 class="mt-3">{{ $relatedPage->title() }}</h3>
                    <x-elements.divider />
                </x-text.base>
            </a>
        </div>
        @endif
    </div>
</section>