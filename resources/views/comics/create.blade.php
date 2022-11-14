@extends('layouts.mainSectionLayout')

@section('content')
    <div id="createComic" class="container">
        <h1>Aggiungi nuovo Comic</h1>

        <form action="{{ route('comic.store') }}" method="POST"
            class="d-flex flex-column gap-2 flex-wrap justify-content-around">
            @csrf

            {{-- Titolo fumetto --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="title">Titolo: </label>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
            </div>

            {{-- Descrizione fumetto --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="description">Descrizione: </label>
                <input type="text" name="description" id="description" value="{{ old('description') }}">
            </div>

            {{-- Link thumb --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="thumb">Link immagine: </label>
                <input type="url" name="thumb" id="thumb" value="{{ old('thumb') }}">
            </div>

            {{-- Prezzo fumetto --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="price">Prezzo: </label>
                <input type="number" step=".01" name="price" id="price">
            </div>

            {{-- Serie del fumetto --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="series">Serie: </label>
                <input type="text" name="series" id="series">
            </div>

            {{-- Data di inizio vendita --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="sale_date">Data di vendita: </label>
                <input type="date" name="sale_date" id="sale_date">
            </div>

            {{-- Tipo fumetto --}}


            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type">
            </div>



            <div class="col-12 d-flex flex-column align-items-start justify-content-center">
                <input type="submit" value="Crea">

            </div>
        </form>

    </div>
@endsection
