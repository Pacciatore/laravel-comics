@extends('layouts.homeLayout')

@section('content')
    <main>

        <div class="jumbotron"></div>

        <!-- Main content -->
        <div class="main-content position-relative container">

            <!-- Titolo: Current Series -->
            <div class="group-tag position-absolute fs-1 pt-1">Current Series</div>

            <!-- comicCard-container -->
            <div class="container pt-5">
                @include('partials._comicCard')
            </div>

            <div class="text-center py-3">
                <button class="group-tag btn rounded-0 fs-5 py-1">
                    Load more
                </button>
            </div>

        </div>

    </main>
@endsection
