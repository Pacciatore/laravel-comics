<div class="comic-container d-flex flex-wrap pt-3 g-0">
    @foreach ($comics as $comic)
        <div class="col-2">
            <div class="comic-thumb position-relative me-2">

                <!-- Displays on hover -->
                <a href="{{ route('comic.show', $comic->id) }}">
                    <div
                        class="comic-info pe-2 position-absolute d-flex flex-column align-items-end justify-content-end">
                        <div class="comic-type text-capitalize">{{ $comic['type'] }}</div>
                        <div class="comic-price fs-5">{{ $comic['price'] }}</div>
                    </div>
                </a>

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
