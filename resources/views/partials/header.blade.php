<header>
    <div class="header_top">
        <div class="container d-flex justify-content-end align-items-center gap-5 py-1 text-uppercase">
            <a href="/">DC Power&trade;Visa&reg;</a>
            <a href="/">Additional DC Sites</a>
        </div>
    </div>

    <div class="header_bottom my-1">
        <div class="container d-flex justify-content-between">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="my-3">

            <nav class="d-flex align-items-center gap-4 text-uppercase">
                <a href="/" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}">characters</a>
                <a href="/" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">comics</a>
                <a href="/" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}">movies</a>
                <a href="/" class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}">tv</a>
                <a href="/" class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}">games</a>
                <a href="/" class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">collectibles</a>
                <a href="/" class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}">videos</a>
                <a href="/" class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}">fans</a>
                <a href="/" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">news</a>
                <a href="/" class="gap-1{{Route::currentRouteName() === 'shop' ? 'active' : ''}}">shop
                    <i class="fa-solid fa-caret-down"></i>
                </a>
            </nav>

            <div class="search d-flex align-items-center">
                <div class="text-end">
                    Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>