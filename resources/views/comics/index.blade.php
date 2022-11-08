@extends('layouts.homeLayout')

@section('content')
    <main>

        <div class="jumbotron"></div>

        <!-- Main content -->
        @include('partials._mainContent')

        <!-- Blue Band section -->
        @include('partials._blueBand')

    </main>
@endsection
