require('./bootstrap');


$(document).ready(function (params) {
    $('.show_menu_cta').on('click',function (params) {
        $('menu').addClass('active')
    })

    $('.btn_close_cta').on('click',function (params) {
        $('menu').removeClass('active')
    })

    ///////////////////////
    let item_percentagep5 = 100 / 3

    for (let i = 0; i < 3; i++) {
        $('.dts-1').append(`<div class="dots_custom-item dts-1-item" style="width:${item_percentagep5}%"></div>`)
    }

    $(".slider-home-1").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
        let idx = currentSlide == undefined ? 0 : currentSlide
        $('.dts-1-item').each(function (params) {
            if($(this).index() === idx){
                $(this).addClass('active')
                $('.dts-1-item').not($(this)).removeClass('active');
            }
        })
    });

    $('.slider-home-1').slick({
        dots:false,
        infinite: false,
        prevArrow: $('.prev-slier-home-1'),
        nextArrow: $('.next-slier-home-1'),
        asNavFor: '.slider-home-1-text'
    })

    $('.slider-home-1-text').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-home-1'
    });

    $('.slider-detail-product').slick({
        dots: false
    })

    $('.btn-lang').on('click',function (params) {
        $('.lang_wrapper ul').toggleClass('active')
        $(this).toggleClass('active')
    })

})