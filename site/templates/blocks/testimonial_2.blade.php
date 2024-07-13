
<section class="bg-cover bg-center py-24 flex items-centermy-10 relative">
    <div class="text-blue-800 max-w-2xl mx-auto text-center px-5 space-y-10 relative z-20">
        <div class="prose dm-serif-display-regular-italic text-blue-800 text-3xl tracking-wider">@kt($page->text())</div>
        <x-elements.divider />
        <div class="text-2xl md:text-4xl la-belle-aurore-regular">{{ $page->client() }}</div>
        @if ($page->name()->isNotEmpty())
        <div class="prose text-blue-800"><span class="la-belle-aurore-regular text-4xl mr-2">{{ $page->name() }}</span> - <span class="ml-2 poppins-light tracking-widest">{{ $page->ocupation() }}</span></div>               
        @endif
    </div>
</section>
