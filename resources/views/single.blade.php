@extends('layouts.app')

@section('title-tab', 'Single')

@section('content')
    <div class="wp-jumbotron">
        @include('partials.jumbotron')

        <div class="blue-banner">
            <div class="container">
                <div class="wp-poster">
                        <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
                </div>
            </div>
        </div>
    </div>

    <div class="description-adv">
        <div class="container">

            <div class="description">
                <h1>{{ $fumetto ['title'] }}</h1>

                <div class="banner-price" id="banner-price">
                    <div class="price">
                        <span>U.S Price: {{ $fumetto['price'] }}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <span>Check Availability</span>
                </div>
                <p>{{ $fumetto['description'] }}</p>
            </div>
        </div>


    </div>



@endsection
