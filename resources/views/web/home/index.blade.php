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
                        <a href="{{route('home')}}">FOURTEENTH</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header__top-bar--right">
                        <div class="lang_wrapper">
                            <p class="btn-lang">Global <span><svg data-v-57a0bc08="" width="12" height="7" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg" class="fill-current ml-2"><path data-v-57a0bc08="" d="M9.60002 0L5.5 4.10001L1.40003 6.31809e-06L2.95639e-05 1.40001L5.5 7.00001L11.1 1.5L9.60002 0Z"></path></svg></span></p>
                            <ul>
                                <li><a href="">IDN</a></li>
                                <li><a href="">AUS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__banner">
        <img src="{{asset('images/banner-new.jpg')}}" alt="banner" srcset="" width="100%">
        <div class="header__banner-text">
            <a href="{{route('shop')}}" class="btn-black-fr">SHOP</a>
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
                    <a href="{{route('shop')}}" class="btn-black-fr">SHOP</a>
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
                    <a href="{{route('shop-detail','test')}}">
                        <img src="https://source.unsplash.com/random/400x466" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="{{route('shop-detail','test')}}">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a href="{{route('shop-detail','test')}}" class="btn-quickview" href="">QUICKVIEW</a>
                </div>
            </div>
            <div class="product__case">
                <div class="product__case-img">
                    <a href="{{route('shop-detail','test')}}">
                        <img src="https://source.unsplash.com/random/400x467" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="{{route('shop-detail','test')}}">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a href="{{route('shop-detail','test')}}" class="btn-quickview" href="">QUICKVIEW</a>
                </div>
            </div>
            <div class="product__case">
                <div class="product__case-img">
                    <a href="{{route('shop-detail','test')}}">
                        <img src="https://source.unsplash.com/random/400x468" alt="banner" srcset="">
                    </a>
                </div>
                <div class="product__case-title">
                    <a href="{{route('shop-detail','test')}}">
                        <span class="product-title">Detangling conditioner</span>
                        <p class="product-desc">Amino acid complex 1%</p>
                    </a>
                    <a href="{{route('shop-detail','test')}}" class="btn-quickview" href="">QUICKVIEW</a>
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
                                <p class="text-top">Lorem Ipsum Dolor</p>
                                <img src="https://source.unsplash.com/random/620x650" alt="banner" srcset="">
                                <p class="text-bottom">Lorem Ipsum Dolor</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img_wrapper">
                            <a href="">
                                <p class="text-top">Lorem Ipsum Dolor</p>
                                <img src="https://source.unsplash.com/random/620x651" alt="banner" srcset="">
                                <p class="text-bottom">Lorem Ipsum Dolor</p>
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
                        <a class="btn-learn-more" href="">Find nearby store</a>
                    </div>
                    <div class="col-md-8">
                        <div class="home__slider_wrapper">
                            <div class="slider_wr position-relative">
                                <div class="slider-home-1">
                                    <img src="https://source.unsplash.com/random/830x441" alt="banner" width="100%" srcset="">
                                    <img src="https://source.unsplash.com/random/830x442" alt="banner" width="100%" srcset="">
                                    <img src="https://source.unsplash.com/random/830x443" alt="banner" width="100%" srcset="">
                                </div>
                                <div class="prev-arrow prev-slier-home-1">
                                    <img src="{{asset('images/left_arrow.svg')}}" alt="">
                                </div>
                                <div class="next-arrow next-slier-home-1">
                                    <img src="{{asset('images/right_arrow.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="dots_custom dts-1"></div>
                            <br>
                            <br>
                            <br>
                            <div class="slider-home-1-text">
                                <p>Aesop Hollywood Road</p>
                                <p>Aesop Town Plaza</p>
                                <p>AEON Mall BSD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection