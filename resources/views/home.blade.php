@extends('layouts.app')

@section('content')
<!-- jumbotron -->
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}} " alt="jumbotron">
</div>

<!-- current series -->
<div class="current_series pt-4 pb-3">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach($comics as $comic)
            <div class="col">
                <div class="card border-0 rounded-0 text-uppercase">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="my-2">
                    {{ $comic['series'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- buy comics -->
<div class="buy_comics py-5">
    <div class="container">
        <div class="row row-cols-5">
            <div class="col">
                <div class="text-uppercase">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    Digital Comics
                </div>
            </div>

            <div class="col">
                <div class="text-uppercase">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    DC Merchandise
                </div>
            </div>

            <div class="col">
                <div class="text-uppercase">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    Subscription
                </div>
            </div>

            <div class="col">
                <div class="text-uppercase">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    Comic Shop Locator
                </div>
            </div>

            <div class="col">
                <div class="text-uppercase">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    DC Power Visa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection