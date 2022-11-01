<div class="main-footer">
    <div class="container d-flex justify-content-between">

        <!-- Footer Links -->
        <div class="col-4 d-flex py-4">

            <!-- First column: Site navigation & Shops Links -->
            <div class="col-4">
                @include('partials._linkList')
                {{-- <LinkListComponent :listArray="dcNavLinks" /> --}}
                {{-- <LinkListComponent :listArray="dcShops" /> --}}
            </div>

            <!-- Second column: DC Legal Links -->
            <div class="col-4">
                {{-- <LinkListComponent :listArray="dcLegals" /> --}}
            </div>

            <!-- Third column: DC Sites Links -->
            <div class="col-4">
                {{-- <LinkListComponent :listArray="sitesList" /> --}}
            </div>

        </div>

        <!-- Logo nel background -->
        <div class="dc-footer-mark col-6">
        </div>

    </div>
</div>
