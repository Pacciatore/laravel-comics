@extends('layouts.mainSectionLayout')

@section('content')
    <div class="blueRule position-relative"></div>

    <div id="editComic">

        <div class="edit-content container py-4">

            <h1>Edit Comic</h1>

            <form method="POST" action="{{ route('comic.update', $comic->id) }}"
                class="d-flex flex-column justify-content-between gap-3">
                @csrf
                @method('PUT')


                {{-- Titolo fumetto --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="title">Titolo: </label>
                    <input type="text" name="title" id="title" value="{{ old('title', $comic['title']) }}">

                    @error('title')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Descrizione fumetto --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="description">Descrizione: </label>

                    <textarea name="description" id="description" cols="100" rows="10">{{ old('description', $comic['description']) }}</textarea>

                    @error('description')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Link thumb --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="thumb">Link immagine: </label>
                    <input type="url" name="thumb" id="thumb" value="{{ old('thumb', $comic['thumb']) }}">

                    @error('thumb')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Prezzo fumetto --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="price">Prezzo: </label>
                    <input type="number" step=".01" name="price" id="price"
                        value="{{ old('price', $comic['price']) }}">

                    @error('price')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Serie del fumetto --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="series">Serie: </label>
                    <input type="text" name="series" id="series" value="{{ old('series', $comic['series']) }}">

                    @error('series')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Data di inizio vendita --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="sale_date">Data di vendita: </label>
                    <input type="date" name="sale_date" id="sale_date"
                        value="{{ old('sale_date', $comic['sale_date']) }}">

                    @error('sale_date')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Tipo fumetto --}}
                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <label for="type">Tipo: </label>
                    <input type="text" name="type" id="type" value="{{ old('type', $comic['type']) }}">

                    @error('type')
                        <div class="alert alert-danger error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                    <input class="btn btn-info text-white btn-submit" type="submit" value="Update">
                </div>

            </form>

            {{-- Barra con bottoni interazione comic --}}
            <div class="btn-bar d-flex justify-content-between btn-bottom end-0 gap-5 position-absolute">

                {{-- Delete Button --}}
                <div class="left-side">
                    <div class="btn btn-outline-danger">
                        <a class="text-decoration-none" href="{{ route('comic.confirm-delete', $comic->id) }}">Delete</a>
                    </div>
                </div>

                {{-- Index & Show Button --}}
                <div class="right-side d-flex gap-2">

                    <div class="btn btn-primary">
                        <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back to Homepage</a>
                    </div>

                    <div class="btn btn-primary">
                        <a class="text-white text-decoration-none" href="{{ route('comic.show', $comic->id) }}">Back to
                            Comic</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
