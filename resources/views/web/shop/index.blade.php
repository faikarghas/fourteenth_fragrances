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
                        <p>Fourteenth Fragrances</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header__top-bar--right">
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
</main>
@endsection