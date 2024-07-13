<footer class="max-w-6xl mx-auto px-5 py-10 space-y-10">
    <div class="dm-serif-display-regular text-3xl flex-none text-center text-blue-800">
        <a href="{{ $site->url() }}" aria-label="Ir a pagina principal">{{ $site->title() }}</a>
    </div>
    <nav class="grow flex space-x-5">
        <ul class="uppercase text-sm poppins-semibold md:flex justify-center mx-auto list-none space-x-5 text-center text-blue-800">
            @foreach ($site->children()->unlisted() as $item)
            <a class="hover:text-blue-700 transition" href="{{ $item->url() }}" aria-label="Ir a {{ $item->title() }}"><li>{{ $item->title() }}</li></a>
            @endforeach
            <a class="hover:text-blue-700 transition" href="mailto:{{ $site->email() }}" aria-label="Enviar correo"><li>Contacto</li></a>
        </ul>
    </nav>
    <x-elements.divider />
    <div></div>
    <di class="space-y-5">
        <h5 class="text-2xl text-center text-blue-800">Sigamos en contacto</h5>
        <div class="flex justify-center space-x-5 text-blue-800">
            <div><a class="text-2xl" href="{{ $site->instagram() }}" target="blank"><i class="lni lni-instagram"></i></a></div>
            <div><a class="text-2xl" href="{{ $site->tiktok() }}" target="blank"><i class="lni lni-tiktok-alt"></i></a></div>
            <div><a class="text-2xl" href="{{ $site->youtube() }}" target="blank"><i class="lni lni-youtube"></i></a></div>
        </div>
    </div>
    <div class="text-center text-sm poppins-light text-blue-800">{{ $site->copyright() }} {{ date('Y') }}</div>
</footer>