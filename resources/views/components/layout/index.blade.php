<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Fourteenth Fragrances</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

        @yield('custom-css')

    </head>
    <body>

        {{-- @include('components/presentational/header/index') --}}
        @yield('header')

        @yield('main')

        <footer>
            <div class="footer-logo"><h2>FRAGRANCES</h2></div>
            <div class="footer-sitemap">
                <div class="site">
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">SHOP</a></li>
                        <li><a href="">LEARN</a></li>
                    </ul>
                    <ul class="w-title">
                        <li><p>Customer Care</p></li>
                        <li><a href="">Ingredients</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Shipping & Returns</a></li>
                    </ul>
                    <ul class="w-title">
                        <li><p>Contact</p></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Stockists</a></li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                    <ul class="w-title">
                        <li><p>Society</p></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Youtube</a></li>
                    </ul>
                </div>
                <div class="unk">

                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        @yield('script')
        </body>
</html>


