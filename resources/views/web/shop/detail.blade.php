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
    <section class="section__third">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12 d-flex justify-content-center">
                    <div class="content__wrapper text-center">
                        <p>★★★★★</p>
                        <p>“I really enjoy this body wash and its light scent. It leaves my skin smooth and just the right amount of moisture. My skin is very dry and it helps more than others I’ve tried in the past!”</p>
                        <br>
                        <br>
                        <em>Sam F.</em>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rel__products">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <h2>Related Products</h2>
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