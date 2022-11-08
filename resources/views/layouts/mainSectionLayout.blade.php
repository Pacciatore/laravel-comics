@extends('layouts.homeLayout')

@section('content')
    <main>

        <div class="jumbotron"></div>

        <!-- Main content -->
        @yield('_mainContent')

        <!-- Blue Band section -->
        @yield('blueBand')

    </main>
@endsection
