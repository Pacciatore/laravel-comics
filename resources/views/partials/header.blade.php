<?php
$headerNavLi = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
?>

<header>

    <div class="container">

        <!-- Barra di navigazione -->
        <nav class="navbar navbar-expand-lg justify-content-between">

            <!-- Logo della pagina -->
            <a class="img-container navbar-brand" href="#">
                <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
            </a>

            <!-- Elementi di navigazione -->
            <ul class="navbar-nav">
                <?php foreach ($headerNavLi as $navElement) {?>
                <li class="nav-item item px-1">
                    <a href="#" class="nav-link">
                        {{ $navElement }}
                    </a>
                </li>
                <?php } ?>
            </ul>

        </nav>

    </div>

</header>
