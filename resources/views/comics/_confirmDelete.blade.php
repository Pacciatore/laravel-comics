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
            <div class="comic-delete-confirmation pb-5 d-flex flex-column">

                <h3>You are deleting: <span class="h2">{{ $comic['title'] }}</span> </h3>

                <h1>Are you sure?</h1>

                <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Sì" class="btn btn-danger">
                </form>

                <div class="btn btn-secondary btn-bottom ms-5 position-absolute">
                    <a class="text-white text-decoration-none" href="{{ route('comic.show', $comic->id) }}">No</a>
                </div>

            </div>

            {{-- Barra con bottoni interazione comic --}}
            <div class="btn-bar d-flex gap-2">

                <div class="btn btn-primary">
                    <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back to Homepage</a>
                </div>
                <div class="btn btn-info">
                    <a class="text-white text-decoration-none" href="{{ route('comic.edit', $comic->id) }}">Go to
                        Edit</a>
                </div>

            </div>

        </div>
    </div>
@endsection
