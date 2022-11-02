@extends('layouts.homeLayout')

@section('content')
    <main>

        <div class="jumbotron"></div>

        <!-- Main content -->
        @include('partials._mainContent')

    </main>
@endsection

@section('test')
    @foreach ($siteLinks as $linkLi)
        <li class="fs-3">{{ $linkLi['title'] }}</li>

        @foreach ($linkLi['elements'] as $liElement)
            <a href="#">{{ $liElement }}</a>
        @endforeach
    @endforeach
@endsection
