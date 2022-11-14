@extends('layouts.mainSectionLayout')

@section('_mainContent')
    <div class="comicShow position-relative pb-5">

        {{-- Banda blu separatore jumbotron --}}
        <div class="blueRule"></div>

        <div class="position-relative container">

            {{-- Immagine del comic --}}
            <div class="group-tag position-absolute fs-1 pt-1">
                <div class="img-container text-center">
                    <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                </div>
            </div>

            {{-- Info del comic: titolo, descrizione, prezzo --}}
            <div class="comic-info pb-5">
                <h1> {{ $comic['title'] }} </h1>

                <p> {{ $comic['description'] }} </p>

                <p> {{ $comic['price'] }} </p>
            </div>

            {{-- Barra con bottoni interazione comic --}}
            <div class="btn-bar d-flex justify-content-between">

                {{-- Back & Edit Button --}}
                <div class="left-side d-flex gap-2">

                    <div class="btn btn-primary">
                        <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back</a>
                    </div>

                    <div class="btn btn-primary">
                        <a class="text-white text-decoration-none" href="{{ route('comic.edit', $comic->id) }}">Edit</a>
                    </div>

                </div>

                {{-- Delete Button --}}
                <div class="right-side">

                    <div class="btn btn-outline-danger">
                        <a class="text-decoration-none" href="{{ route('comic.confirm-delete', $comic->id) }}">Delete</a>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
