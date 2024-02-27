/*
  [JS Index]

  ---

  Template Name: Dexa - Under Construction Template
  Author:  ex-nihilo
  Version: 1.0
*/


/*
  1. preloader
  2. fadeIn.element
  3. slick slider
    3.1. slick about slider
    3.2. slick services slider
	3.3. slick fullscreen slideshow
  4. countdown
    4.1. countdown timer
	4.2. countdown SETUP
  5. navigation
    5.1. navigation open/close
    5.2. navigation active state
    5.3. navigation hover state
  6. fullPage
  7. YouTube player
    7.1. highlight YouTube player navigation
  8. forms
    8.1. newsletter form
*/


$(function() {
    "use strict";


    $(window).on("load", function() {
        // 1. preloader
        $("#preloader").fadeOut(600);
        $(".preloader-bg").delay(400).fadeOut(600);

        // 2. fadeIn.element
        setTimeout(function() {
            $(".fadeIn-element").delay(600).css({
                display: "none"
            }).fadeIn(800);
        }, 0);
    });

    // 3. slick slider
    // 3.1. slick about slider
    $(".slick-about").slick({
        arrows: true,
        initialSlide: 0,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: "<i class='slick-prev icon ion-chevron-left'></i>",
        nextArrow: "<i class='slick-next icon ion-chevron-right'></i>",
        fade: false,
        autoplay: false,
        autoplaySpeed: 4000,
        cssEase: "ease",
        speed: 500
    });
    // 3.2. slick services slider
    $(".slick-services").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: "<i class='slick-prev icon ion-chevron-left'></i>",
        nextArrow: "<i class='slick-next icon ion-chevron-right'></i>",
        fade: false,
        autoplay: false,
        autoplaySpeed: 4000,
        cssEase: "ease",
        speed: 500
    });
    // 3.3. slick fullscreen slideshow
    $(".slick-fullscreen-slideshow").slick({
        arrows: false,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        cssEase: "ease",
        speed: 1600,
        draggable: true,
        dots: false,
        pauseOnDotsHover: false,
        pauseOnFocus: false,
        pauseOnHover: false
    });

    // 4. countdown
    $(document).on("ready", function() {
        // 4.1. countdown timer
        $(".countdown").countdown({
            until: new Date(Date.parse(setting.counter.lastDate)),
            layout: $(".countdown").html(),
            timezone: setting.counter.timeZone
        });
    });
    // 4.2. countdown SETUP
    var setting = {
        counter: {
            lastDate: "01/01/2019 12:00:00", // target date settings, 'MM/DD/YYYY HH:MM:SS'
            timeZone: null
        }
    };

    // 5. navigation
    // 5.1. navigation open/close
    $(".navigation-icon").on("click", function() {
        $(this).toggleClass("active");
    });
    $(".navigation-fire").on("click", function(e) {
        $(this).toggleClass("open");
        $("nav.navigation-menu").toggleClass("show");
    });
    $("nav.navigation-menu a").on("click", function(e) {
        var hash = $(this.hash);
        $("nav").removeClass("show");
        $(".navigation-fire").removeClass("open");
        $(".navigation-icon").removeClass("active");
    });
    // 5.2. navigation active state
    $("a.menu-state").on("click", function() {
        $("a.menu-state").removeClass("active");
        $(this).addClass("active");
    });
    // 5.3. navigation hover state
    hoverMenu();
    imgMenu();
    function hoverMenu() {
        $(".menu li a").on("mouseenter", function() {
            var ref = $(this).data("ref"),
                menuImg = $('.menu-img[data-ref="' + ref + '"]');
            $(".menu li a").removeClass("active");
            $(this).addClass("active");
            $(".menu-img").removeClass("active");
            menuImg.addClass("active");
        });
    }
    function imgMenu() {
        $("[data-bg]").each(function() {
            var bg = $(this).data("bg");
            $(this).css({
                "background-image": 'url(' + bg + ')',
                "background-position": "center center",
                "background-size": "cover"
            });
        });
    }

    // 6. fullPage
    $("#fullpage").fullpage({
        anchors: ["home", "about", "services", "launch", "contact"],
        navigation: true,
        navigationPosition: "right",
        navigationTooltips: ["Home", "About", "Services", "Launch", "Contact"],
        responsiveWidth: 900,
        autoScrolling: true,
        scrollBar: false,
        afterResponsive: function(isResponsive) {}
    });

    // 7. YouTube player
    $("#bgndVideo").YTPlayer();
    // 7.1. highlight YouTube player navigation
    $(".video-state").on("click", function() {
        $(".video-state").removeClass("active");
        $(this).addClass("active");
    });

    // 8. forms
	// 8.1. newsletter form
    $("form#subscribe").on("submit", function() {
        $("form#subscribe .subscribe-error").remove();
        var s = !1;
        if ($(".subscribe-requiredField").each(function() {
                if ("" === jQuery.trim($(this).val())) $(this).prev("label").text(), $(this).parent().append('<span class="subscribe-error">Please enter your Email</span>'),
                    $(this).addClass("inputError"), s = !0;
                else if ($(this).hasClass("subscribe-email")) {
                    var r = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    r.test(jQuery.trim($(this).val())) || ($(this).prev("label").text(), $(this).parent().append('<span class="subscribe-error">Please enter a valid Email</span>'),
                        $(this).addClass("inputError"), s = !0);
                }
            }), !s) {
            $("form#subscribe input.submit").fadeOut("normal", function() {
                $(this).parent().append("");
            });
            var r = $(this).serialize();
            $.post($(this).attr("action"), r, function() {
                $("form#subscribe").slideUp("fast", function() {
                    $(this).before('<div class="subscribe-success">Thank you for subscribing.</div>');
                });
            });
        }
        return !1;
    });


});