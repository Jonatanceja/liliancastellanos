<section class="px-5 bg-orange-50 relative z-0 md:z-50 pt-24 md:pt-0 md:py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5 max-w-6xl mx-auto items-">
        <div class="col-span-1 relative mt-32 hidden md:block" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
            @if ($images = $page->picture()->toFiles())

                {{-- Primera imagen --}}
                <picture>
                    <source srcset="{{ $images->nth(0)->thumb(['format' => 'webp', 'width' => 400,])->url() }}" type="image/webp">
                    <img class="w-full" src="{{ $images->nth(0)->url() }}" alt="">
                </picture>

                {{-- Segunda imagen --}}
                <picture>
                    <source srcset="{{ $images->nth(1)->thumb(['format' => 'webp', 'width' => 400,])->url() }}" type="image/webp">
                    <img class="absolute -left-10 top-56 w-4/5" src="{{ $images->nth(1)->url() }}" alt="">
                </picture>

            @endif
        </div>
        <div class="col-span-2" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            <div class="prose text-blue-800 prose-h1:text-blue-800 text-center relative z-20">
                @kt($page->headline())
            </div>
            <div>
                @if ($video = $page->video()->toFile())
                <video class="w-3/4 mx-auto -mt-4 relative z-10" autoplay loop muted>
                    <source src="{{ $video->url() }}" type="video/mp4">
                </video>
                @endif
            </div>
            <div class="uppercase tracking-widest font-semibold text-center text-blue-800 mt-5">{{ $page->headline2() }}</div>
            <div class="border border-t border-t-blue-300 mt-5" ></div>
            <x-text.base>
                    @kt($page->text())
                    @foreach ($page->button()->toStructure() as $item)
                        <a href="">
                            <x-elements.button>{{ $item->text() }}</x-elements.button>
                        </a>
                    @endforeach
            </x-text.base>
            
        </div>
        <div class="col-span-1 hidden md:block" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
            @if ($image = $page->picture3()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400,])->url() }}" type="image/webp">
                <img class="w-full mt-44" src="{{ $image->url() }}" alt="">
            </picture>
            @endif
        </div>
    </div>
</section>