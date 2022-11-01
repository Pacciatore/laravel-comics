<ul>
    @foreach ($siteLinks as $linkLi)
        <li>
        <li class="fs-3">{{ $linkLi['title'] }}</li>
        </li>

        @foreach ($linkLi['elements'] as $liElement)
            <a href="#">{{ $liElement }}</a>
        @endforeach
    @endforeach
</ul>
