@extends('layouts.mainSectionLayout')

@section('_mainContent')
    <div class="comicShow position-relative">

        <div class="blueRule"></div>

        <div class="position-relative container">

            <div class="group-tag position-absolute fs-1 pt-1">
                <div class="img-container text-center">
                    <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                </div>
            </div>


            <div class="comic-info">
                <h1> {{ $comic['title'] }} </h1>

                <p> {{ $comic['description'] }} </p>

                <p> {{ $comic['price'] }} </p>
            </div>

            <div class="btn btn-primary">
                <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back</a>
            </div>

        </div>
    </div>
@endsection
