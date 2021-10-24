@extends('components/layout.index')
@section('header')
<header>
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
<main page="shop">
    <section class="section__first">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="shop__header">
                        <h3>SHOP</h3>
                        <ul>
                            <li><a href="">Body</a></li>
                            <li><a href="">Face</a></li>
                            <li><a href="">Hair</a></li>
                            <li><a href="">Home</a></li>
                            <li><a href="">Kits</a></li>
                            <li><a href="">Supplements</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="shop__list">
                    <div class="container-fluid g-0">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                                <a href="{{route('shop-detail','test')}}" class="shop_item">
                                    <div class="shop_item-img">
                                        <picture class="img-display">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x531">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x531">
                                            <img  src="https://source.unsplash.com/random/400x531" alt="banner" srcset="">
                                        </picture>
                                        <picture class="img-on-hover">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x534">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x534">
                                            <img  src="https://source.unsplash.com/random/400x534" alt="banner" srcset="">
                                        </picture>
                                    </div>
                                    <div class="shop_item-tag">
                                        <p class="title-tag">Body Wash</p>
                                        <p class="price-tag">$50</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="{{route('shop-detail','test')}}" class="shop_item">
                                    <div class="shop_item-img">
                                        <picture class="img-display">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x539">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x531">
                                            <img  src="https://source.unsplash.com/random/400x531" alt="banner" srcset="">
                                        </picture>
                                        <picture class="img-on-hover">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x533">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x534">
                                            <img  src="https://source.unsplash.com/random/400x534" alt="banner" srcset="">
                                        </picture>
                                    </div>
                                    <div class="shop_item-tag">
                                        <p class="title-tag">Body Wash</p>
                                        <p class="price-tag">$50</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="{{route('shop-detail','test')}}" class="shop_item">
                                    <div class="shop_item-img">
                                        <picture class="img-display">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x537">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x531">
                                            <img  src="https://source.unsplash.com/random/400x535" alt="banner" srcset="">
                                        </picture>
                                        <picture class="img-on-hover">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x533">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x534">
                                            <img  src="https://source.unsplash.com/random/400x537" alt="banner" srcset="">
                                        </picture>
                                    </div>
                                    <div class="shop_item-tag">
                                        <p class="title-tag">Body Wash</p>
                                        <p class="price-tag">$50</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <a href="{{route('shop-detail','test')}}" class="shop_item">
                                    <div class="shop_item-img">
                                        <picture class="img-display">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x531">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x531">
                                            <img  src="https://source.unsplash.com/random/400x532" alt="banner" srcset="">
                                        </picture>
                                        <picture class="img-on-hover">
                                            <source media="(min-width:650px)" srcset="https://source.unsplash.com/random/400x534">
                                            <source media="(min-width:465px)" srcset="https://source.unsplash.com/random/400x534">
                                            <img  src="https://source.unsplash.com/random/400x535" alt="banner" srcset="">
                                        </picture>
                                    </div>
                                    <div class="shop_item-tag">
                                        <p class="title-tag">Body Wash</p>
                                        <p class="price-tag">$50</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection