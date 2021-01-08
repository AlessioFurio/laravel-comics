@extends('layouts.app')

@section('title-tab', 'Home')

@section('content')
    @include('partials.jumbotron')

    <div class="section-cards">
        <div class="container">

            <div class="cards">
                @foreach ($comics as $index => $item)
                    <a href="{{route('comic-details', ['id' => $index])}}">
                        <div class="card">
                            <div class="wp-poster">
                                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            </div>
                            <div class="description">
                                <h4>{{ $item['series']}}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="btn">
                <button type="button" name="button">Load more</button>
            </div>

        </div>
    </div>

@endsection
