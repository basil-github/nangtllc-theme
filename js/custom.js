$(function () {
  // MENU
  $(".navbar-collapse a").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  // AOS ANIMATION
  AOS.init({
    disable: "mobile",
    duration: 800,
    anchorPlacement: "center-bottom",
  });

  // SMOOTHSCROLL NAVBAR
  $(function () {
    $(".navbar a, .hero-text a").on("click", function (event) {
      var $anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top - 49,
          },
          1000
        );
      event.preventDefault();
    });
  });

  $(function () {
    $(".open_nave").on("click", function (event) {
      $("body").addClass("is-active");
    });
  });
  $(function () {
    $(".close_nave").on("click", function (event) {
      $("body").removeClass("is-active");
    });
  });

  $(function () {
    const swiperPo = new Swiper('.swiper-product', {
      speed: 400,
      slidesPerView: 4,
      loop: true,
      autoplay: {
        delay: 6500,
        disableOnInteraction: false,
      }, navigation: {
        nextEl: '.swiper-prod-next',
        prevEl: '.swiper-prod-prev',
      },
      spaceBetween: 10,
      watchSlidesProgress: true,
      breakpoints: {
        1281: {
          slidesPerView: 3,
        }, 1076: {
          slidesPerView: 2.5,
        },
        640: {
          slidesPerView: 2,
        }
      }

    });
    // HERO SLIDER
    var menu = [];
    jQuery('.swiper-slide').each(function (index) {
      menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
      loop: true,
      speed: 1000,
      parallax: true,
      autoplay: {
        delay: 6500,
        disableOnInteraction: false,
      },
      watchSlidesProgress: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      on: {
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },

        touchStart: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },

        setTransition: function (speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = $(".slide-bg-image");
    sliderBgSetting.each(function (indx) {
      if ($(this).attr("data-background")) {
        $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
    });


    $(document).scroll(function () {
      if ($(this).scrollTop() >= 170) {
        // $(".header__inner").css({ "background-color": "#ffffff" })
        $(".header__outer").css({ "background-color": "#051f31" })
        // $(".header__level-one").css({ "background-color": "#ffffff" })
        $(".header__root").css({ "opacity": "1", "height": "100%", "pointer-events": "auto" })
      } else {
        $(".header__outer").css({ "background-color": "#0d1e3287" })
        // $(".header__inner").css({ "background-color": "#0d1e3287" })
        // $(".header__level-one").css({ "background-color": "#0d1e3287", "pointer-events": "auto", })
        $(".header__root").css({ "opacity": "0", "height": "0", "pointer-events": "none", })
      }
      if (screen.width > 962) {
        if ($(this).scrollTop() >= 270) {
          $(".web_head").css({ "height": "0px" })
        } else {
          $(".web_head").css({ "height": "80px" })
        }
      }

    });
  });
});
