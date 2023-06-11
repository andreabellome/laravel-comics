<?php

$navBarLinks= [
    [
        'nome'=> 'home',
        'current'=> false
    ],
    [
        'nome'=> 'Characters',
        'current'=> false
    ],
    [
        'nome'=> 'Comics',
        'current'=> true
    ],
    [
        'nome'=> 'Movies',
        'current'=> false
    ],
    [
        'nome'=> 'TV',
        'current'=> false
    ],
    [
        'nome'=> 'Games',
        'current'=> false
    ],
    [
        'nome'=> 'Collectibles',
        'current'=> false
    ],
    [
        'nome'=> 'Videos',
        'current'=> false
    ],
    [
        'nome'=> 'Fans',
        'current'=> false
    ],
    [
        'nome'=> 'News',
        'current'=> false
    ],
]

?>

<header>

    <div class="bg-white flex align-it-center mb-3">

        <!-- start: container nav bar -->
        <div class="header-div debug">

            <!-- DC logo image -->
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc-logo" class="img-style padd-5 debug">

            <!-- start: iterate the nav bar -->
            <div class="flex align-it-center flex-wrap debug">
                @foreach( $navBarLinks as $navbarli )
                    <div class="div-nav-bar col-dark">
                        <a href="#" class="debug">
                            {{ $navbarli['nome'] }}
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- end: iterate the nav bar -->

        </div>
        <!-- end: container nav bar -->

    </div>

</header>