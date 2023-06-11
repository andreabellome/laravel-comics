<?php

$footBarLinks= [
    [
        'nome'=> 'Digital Comics',
        'current'=> false,
        'imgUrl'=> 'resources/images/buy-comics-shop-locator.png'
    ],
    [
        'nome'=> 'DC Merchandise',
        'current'=> true,
        'imgUrl'=> '/resources/images/buy-comics-merchandise.png'
    ],
    [
        'nome'=> 'Subscription',
        'current'=> false,
        'imgUrl'=> 'resources/images/buy-comics-subscriptions.png'
    ],
    [
        'nome'=> 'Comic Shop Locator',
        'current'=> false,
        'imgUrl'=> 'resources/images/buy-comics-shop-locator.png'
    ],
    [
        'nome'=> 'DC Power Visa',
        'current'=> false,
        'imgUrl'=> 'resources/images/buy-dc-power-visa.svg'
    ]
]

?>

<footer>

    <!-- start: footer cards -->
    <div class="bg-blue-dc flex align-it-center padd-top-20 padd-bottom-20">

        <div class="footer-div">

            <!-- start: iterate footer card -->
            @foreach( $footBarLinks as $footbarli )
            <div class="footer-card" style="width: calc(100%/5 - 1%);">

                <img src="{{ Vite::asset( $footbarli['imgUrl'] ) }}" alt="{{$footbarli['nome']}}"
                    style="display: inline-block; width: 18%; margin-right: 5px;">

                <span class="col-white">
                    {{$footbarli['nome']}}
                </span>

            </div>
            @endforeach
            <!-- end: iterate footer card -->

        </div>

    </div>
    <!-- end: footer cards -->

    <!-- start: footer main -->
    <div class=" bg-foot-main">
        <div class=" footer-div bg-img-dc padd-top-40 padd-bottom-40">

            <div class=" flex flex-dir-row">

                <div class=" flex flex-dir-col mr-30">
                    <ul class=" padd-5 mb-20 ul-footer-main">
                        <li class="mb-20 text-uppercase text-bold col-white font-size-18">
                            DC Comics
                        </li>
                        <li>
                            <a href="#">
                                Characters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Comics
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Movies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                TV
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                            </a>
                        </li>
                    </ul>

                    <ul class=" padd-5 ul-footer-main">
                        <li class="mb-20 text-uppercase text-bold col-white font-size-18">
                            Shop
                        </li>
                        <li>
                            <a href="#">
                                Shop DC
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Shop DC Collectibles
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class=" padd-5 mr-30 ul-footer-main">
                    <li class="mb-20 text-uppercase text-bold col-white font-size-18">
                        Terms of Use
                    </li>
                    <li>
                        <a href="#">
                            Privacy Policy (New)
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ad Choices
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Advertising
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Subscriptions
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Talent Workshops
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CPSC Certificates
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ratings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Shop Help
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contact us
                        </a>
                    </li>
                </ul>

                <ul class=" padd-5 ul-footer-main">
                    <li class="mb-20 text-uppercase text-bold col-white font-size-18">
                        Sites
                    </li>
                    <li>
                        <a href="#">
                            DC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            MAD Magazine
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Kids
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Universe
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DC Power Visa
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <!-- end: footer main -->

</footer>