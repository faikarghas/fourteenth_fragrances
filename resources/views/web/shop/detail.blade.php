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
<main page="detail-product">
    <section class="section__first">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-6">
                    <div class="product-img slider-detail-product">
                        <img  src="https://source.unsplash.com/random/633x633" alt="banner" srcset="">
                        <img  src="https://source.unsplash.com/random/633x633" alt="banner" srcset="">
                        <img  src="https://source.unsplash.com/random/633x633" alt="banner" srcset="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="product-desc">
                        <h1>Body Wash</h1>
                        <p class="price-tag">$50</p>
                        <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex facere ab non illo maxime enim aspernatur, neque excepturi velit, sapiente blanditiis omnis placeat ipsum aliquid deserunt accusantium corporis libero. At.</p>
                        <ul>
                            <li>Organic</li>
                            <li>Domestically Grown</li>
                            <li>Cruelty-Free</li>
                        </ul>
                        <div class="quantity">
                            <label for="qty">Quantity:</label>
                            <input id="qty" type="number">
                        </div>
                        <button class="btn-add-to-cart">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__second">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="product__ingredients">
                        <h2 class="product__ingredients-title">Ingredients & Directions</h2>
                    </div>
                </div>
                <div class="col-7">
                    <div class="product__ingredients">
                        <div class="product__ingredients-desc">
                            <div class="pr-left">
                                <ul>
                                    <li>Green Tea</li>
                                    <li>Sea Buckthorn</li>
                                    <li>Orange Extract</li>
                                    <li>Aloe Vera</li>
                                </ul>
                                <a href="">Full Ingredients List</a>
                            </div>
                            <div class="pr-right">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ex at nihil accusantium ipsam est facilis molestiae repellat nobis totam esse, vel porro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="product__img">
                        <img  src="https://source.unsplash.com/random/400x425" alt="banner" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection