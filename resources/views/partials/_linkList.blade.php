@foreach ($siteLinks as $linkLi)
    <div class="col-4">
        <ul>
            <li class="fs-3">{{ $linkLi['title'] }}</li>

            @foreach ($linkLi['elements'] as $liElement)
                <li>
                    <a href="#">{{ $liElement }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
