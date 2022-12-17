<header>
    <!-- header top -->
    <div class="header_top">
        <div class="container d-flex justify-content-end align-items-center gap-5 py-1 text-uppercase">
            <a href="/">DC Power&trade;Visa&reg;</a>
            <a href="/">Additional DC Sites</a>
        </div>
    </div>

    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container d-flex justify-content-between">
            <!-- logo -->
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="my-2">

            <!-- menu -->
            <nav class="d-flex align-items-center gap-4 text-uppercase">
                <a href="/characters" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}">characters</a>
                <a href="/" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">comics</a>
                <a href="/movies" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}">movies</a>
                <a href="/tv" class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}">tv</a>
                <a href="/games" class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}">games</a>
                <a href="/collectibles" class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">collectibles</a>
                <a href="/videos" class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}">videos</a>
                <a href="/fans" class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}">fans</a>
                <a href="/news" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">news</a>
                <div class="dropdown h-100 position-relative">
                    <a href="/" class="gap-1 {{Route::currentRouteName() === 'shop' ? 'active' : ''}}">shop
                        <i class="fa-solid fa-caret-down"></i>
                    </a>

                    <!-- shop dropdown menu -->
                    <div class="dropdown_menu p-2">
                        <ul class="list-unstyled p-0">
                            <li>DC Shop</li>
                            <li>Most popular</li>
                            <li>New arrivals</li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- search -->
            <div class="search d-flex align-items-center">
                <div class="text-end">
                    Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>