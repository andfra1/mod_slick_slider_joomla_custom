jQuery(document).ready(function(){
    jQuery('.slickSlider_wrapper').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 200000,
            arrows: true,
            dots: true,
            infinite: true,
            mobileFirst: true,
            pauseOnHover: false,
            speed: 300, //[int(ms)] Slide/Fade animation speed
            swipe: true, //[boolean] Enable swiping
            useCSS: true, //[boolean] Enable/Disable CSS Transitions
            useTransform: true, //[boolean] Enable/Disable CSS Transforms
        });

    jQuery('.slickSlider_wrapper').css('max-height', window.innerHeight); //remove this if you don't want set maximum height of slider
});