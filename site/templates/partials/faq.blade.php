<section class="py-10 px-5 max-w-4xl mx-auto">
    <h3 class="text-2xl md:text-4xl text-blue-800 mb-10">Preguntas Frecuentes</h3>
    <div x-data="{ open: null }" class="space-y-8">
        @foreach (page('preguntas-frecuentes')->questions()->toStructure() as $item)
        <div x-data="{ open: false }">
            <button class="flex items-center justify-between w-full p-4 mb-4 text-left font-medium border-b border-blue-300"
            @click="open = !open">
                <h5 class="text-blue-800 text-lg tracking-wide">{{ $item->question() }}</h5>
                <div class="text-blue-800 text-2xl" x-show="!open"><i class="lni lni-chevron-down"></i></div>
                <div class="text-blue-800 text-2xl" x-show="open"><i class="lni lni-chevron-up"></i></div>
            </button>
            <div x-show="open" class="mt-4 text-gray-700 px-4" style="display: none;">
                <x-text.left>{!! $item->answer() !!}</x-text.left>
            </div>
        </div>  
        @endforeach
    </div>
</section>