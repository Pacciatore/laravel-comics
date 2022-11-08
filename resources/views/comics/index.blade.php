@extends('layouts.homeLayout');

@section('content')
    <div class="card-container d-flex flex-wrap gap-3 justify-content-around">

        @foreach ($comics as $comic)
            <div class="card col-3">

                <div class="img-container text-center">
                    <a href="{{ route('comic.show', $comic->id) }}">
                        <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                    </a>
                </div>

                <div class="comic-info p-2">
                    <h1> {{ $comic['title'] }} </h1>

                    <p> {{ $comic['description'] }} </p>

                    <p> {{ $comic['price'] }} </p>
                </div>

            </div>
        @endforeach

    </div>
@endsection
