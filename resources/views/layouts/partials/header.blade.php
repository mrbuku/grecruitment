<header class="site-header w-full z-100">
    <nav class="flex justify-between h-70 px-4 xl:px-6">
        <div class="flex">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" title="{{ __('Home') }}">
                    <figure class="w-50 min-w-50 text-white">
                        <span class="inline-svg" style="padding-top: 100%;">
                            @svg('logo')
                        </span>
                    </figure>
                </a>
            </div>
        </div>

        <div class="column flex items-center">
            @auth
                @include('layouts.partials.authenticated')
            @else
                @include('layouts.partials.guest')
            @endauth

            <button aria-label="toggle mobile menu" class="burger-button block xl:hidden ml-3 md:ml-4">
                <span class="burger-button-line pointer-events-none"></span>
            </button>
        </div>

    </nav>
</header>
