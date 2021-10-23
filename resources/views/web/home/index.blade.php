@extends('components/layout.index')
@section('header')
<header class="h-home">
    <div class="header__top">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-3">
                    <div class="header__top-bar--left">
                        <p class="show_menu_cta">SHOP</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header__top-bar--center">
                        <a href="{{route('home')}}">Fourteenth Fragrances</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header__top-bar--right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__banner">
        <img src="https://source.unsplash.com/random/1200x800" alt="banner" srcset="" width="100%">
        <div class="header__banner-text">
            <p>Introducing The Antioxidant Body Wash</p>
            <h1>High Performance Botanical Skincare</h1>
            <a class="btn-black-fr">SHOP</a>
        </div>
    </div>

    <menu>
        <img class="btn_close_cta" src="{{asset('/images/close.svg')}}" width="20px" alt="">
        <div class="list__menu">
            <nav>
                <ul>
                    <li><a href="{{route('shop')}}">Shop All</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Stockist</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <input type="text" name="" placeholder="Search" id="">
            </nav>
        </div>
    </menu>
</header>
@endsection
@section('main')
<main page="home">
    <section class="section__first">
        <div class="content_wrapper">
            <div class="content_wrapper-left">
                <div class="content-text">
                    <p class="content-title">High Performance Botanical Skincare</p>
                    <a class="btn-black-fr">SHOP</a>
                    <img src="https://source.unsplash.com/random/300x357" alt="banner" srcset="" width="100%">
                </div>
            </div>
            <div class="content_wrapper-right">
                <div class="content-img-1">
                    <img src="https://source.unsplash.com/random/200x244" alt="banner" srcset="">
                </div>
                <div class="content-img-2">
                    <img src="https://source.unsplash.com/random/420x520" alt="banner" srcset="">
                </div>
            </div>
        </div>
    </section>
    <section class="section__second">
        <h2 class="text-headline">NEW ARRIVALS</h2>
        <div class="content_wrapper">
            <div class="product__case">
                <div class="product__case-img">
                    <a href="">
                        <img src="https://source.unsplash.com/random/400x466" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a class="btn-quickview" href="">QUICKVIEW</a>
                </div>
            </div>
            <div class="product__case">
                <div class="product__case-img">
                    <a href="">
                        <img src="https://source.unsplash.com/random/400x467" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a class="btn-quickview" href="">QUICKVIEW</a>
                </div>
            </div>
            <div class="product__case">
                <div class="product__case-img">
                    <a href="">
                        <img src="https://source.unsplash.com/random/400x468" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a class="btn-quickview" href="">QUICKVIEW</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section__third">
        <div class="content-wrapper">
            <div class="container-flui g-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <h3>Our mission is restoring your relationship with your skin.</h3>
                        <a class="btn-learn-more" href="">Learn More</a>
                    </div>
                    <div class="col-md-8">
                        <img src="https://source.unsplash.com/random/830x560" alt="banner" width="100%" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__fourth">
        <div class="content_wrapper">
            <div class="ln"></div>
            <div class="headline-fourth">
                <h2>Reparative, potent and nourishing<br/>instruments for the skin and soul.</h2>
            </div>
            <div class="container-fluid g-0 content_wrapper-img">
                <div class="row g-0">
                    <div class="col-12 col-md-6">
                        <div class="img_wrapper">
                            <a href="">
                                <img src="https://source.unsplash.com/random/620x650" alt="banner" srcset="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img_wrapper">
                            <a href="">
                                <img src="https://source.unsplash.com/random/620x650" alt="banner" srcset="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__fifth">
        <div class="content-wrapper">
            <div class="container-flui g-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <h3>Stockist</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, debitis. Dolorem doloribus ut temporibus aliquam corporis fugiat perspiciatis quia modi.</p>
                        <a class="btn-learn-more" href="">Learn More</a>
                    </div>
                    <div class="col-md-8">
                        <div class="home__slider_wrapper">
                            <div class="slider-home-1">
                                <img src="https://source.unsplash.com/random/830x442" alt="banner" width="100%" srcset="">
                                <img src="https://source.unsplash.com/random/830x442" alt="banner" width="100%" srcset="">
                                <img src="https://source.unsplash.com/random/830x442" alt="banner" width="100%" srcset="">
                            </div>
                            <div class="dots_custom dts-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection