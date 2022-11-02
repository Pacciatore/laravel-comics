<?php
$dcNavLinks = $siteLinks['dcNavLinks'];
$dcShops = $siteLinks['dcShops'];
$dcLegals = $siteLinks['dcLegals'];
$sitesList = $siteLinks['sitesList'];

?>

<div class="col-4">
    <ul>
        <li class="fs-3">{{ $dcNavLinks['title'] }}</li>

        @foreach ($dcNavLinks['elements'] as $liElement)
            <li>
                <a href="#">{{ $liElement }}</a>
            </li>
        @endforeach

        <li class="fs-3">{{ $dcShops['title'] }}</li>

        @foreach ($dcShops['elements'] as $liElement)
            <li>
                <a href="#">{{ $liElement }}</a>
            </li>
        @endforeach

    </ul>
</div>

<div class="col-4">
    <ul>
        <li class="fs-3">{{ $dcLegals['title'] }}</li>

        @foreach ($dcLegals['elements'] as $liElement)
            <li>
                <a href="#">{{ $liElement }}</a>
            </li>
        @endforeach
    </ul>
</div>

<div class="col-4">
    <ul>
        <li class="fs-3">{{ $sitesList['title'] }}</li>

        @foreach ($sitesList['elements'] as $liElement)
            <li>
                <a href="#">{{ $liElement }}</a>
            </li>
        @endforeach
    </ul>
</div>
