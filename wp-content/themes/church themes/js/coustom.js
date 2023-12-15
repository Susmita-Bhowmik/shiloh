$(document).ready(function () {

    $(".pull_mob_nav").click(function(){
        if($(this).hasClass("active")){
            $(this).removeClass("active")
            $(".nav-link-main-index").fadeOut(200)
        }else{
            $(this).addClass("active")
            $(".nav-link-main-index").fadeIn(200)
        }
    });
    $(window).resize(function () {
        if ($(this).width() > 1023) {
            $(".nav-link-main-index").removeAttr("style")
        }
    })

    $(".banner-slick-slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        fade: true
    });

    $(".services-slick-slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 586,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $(".testi-index-slick-slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 586,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});

var audioElements = document.querySelectorAll('audio');
audioElements.forEach(function(audioElement) {
    audioElement.addEventListener('play', function(event) {
        audioElements.forEach(function(otherAudio) {
            if (otherAudio !== event.target) {
                otherAudio.pause();
            }
        });
    });
});