@extends('layouts.homeLayout')

@section('content')
    <main>

        <div class="jumbotron"></div>

        <!-- Main content -->
        <div class="main-content position-relative container">

            <!-- Titolo: Current Series -->
            <div class="group-tag position-absolute fs-1 pt-1">Current Series</div>

            <!-- TODO: comicCard -->
            <div class="container pt-5">
                <div class="comic-container d-flex flex-wrap pt-3 g-0">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="comic-thumb position-relative">

                                <!-- Displays on hover -->
                                <div
                                    class="comic-info pe-2 position-absolute d-flex flex-column align-items-end justify-content-end">
                                    <div class="comic-type text-capitalize">{{ $comic['type'] }}</div>
                                    <div class="comic-price fs-5">{{ $comic['price'] }}</div>
                                </div>

                                <!-- Comic image -->
                                <img class="img-fluid" src="{{ asset($comic['thumb']) }}" :alt="comic.series">

                            </div>

                            <!-- Comic Series display -->
                            <div class="comic-series text-uppercase fs-5 py-3">
                                {{ $comic['series'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center py-3">
                <button class="group-tag btn rounded-0 fs-5 py-1">
                    Load more
                </button>
            </div>

        </div>

    </main>
@endsection
