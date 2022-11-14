@extends('layouts.mainSectionLayout')

@section('content')
    <div id="createComic" class="container py-5">
        <h1>Aggiungi nuovo Comic</h1>

        <form action="{{ route('comic.store') }}" method="POST"
            class="d-flex flex-column gap-2 flex-wrap justify-content-around">
            @csrf

            {{-- Titolo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="title">Titolo: </label>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Descrizione fumetto --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="description">Descrizione: </label>
                <input type="text" name="description" id="description" value="{{ old('description') }}">
                @error('description')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Link thumb --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="thumb">Link immagine: </label>
                <input type="url" name="thumb" id="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Prezzo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="price">Prezzo: </label>
                <input type="number" step=".01" name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Serie del fumetto --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="series">Serie: </label>
                <input type="text" name="series" id="series" value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Data di inizio vendita --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="sale_date">Data di vendita: </label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Tipo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type" value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Submit button --}}
            <div class="col-2 d-flex flex-column align-items-start justify-content-center mt-5">
                <input class="btn btn-info text-white" type="submit" value="Crea">
            </div>

        </form>

        <div class="btn btn-bottom btn-primary btn-to-index">
            <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back to Homepage</a>
        </div>

    </div>
@endsection
