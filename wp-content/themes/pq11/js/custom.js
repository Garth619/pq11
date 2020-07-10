// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'
// @codekit-prepend 'macy.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

  /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if (jQuery(self).attr("id") && window._wq) {
              var videoId = jQuery(self).attr("id").split("-")[1];
              window._wq = window._wq || [];
              _wq.push({
                id: videoId,
                onReady: function (video) {
                  jQuery(self)
                    .find(".wistia_click_to_play")
                    .eq(0)
                    .trigger("click");
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  // createWaypoint('section_three', '#section_three', 'visible', 550, null, true);
  // createWaypoint('section_four', '#section_four', 'visible', 600, null, true);
  // createWaypoint('section_seven', '#section_seven', 'visible', 400, null, true);
  // createWaypoint('consultation', 'footer', 'visible', 400, null, true);

  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $("#sec_one_slider").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    mobileFirst: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  $("#sec_two_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  $("#sec_four_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    adaptiveHeight: true,
    arrows: true,
    dots: false,
    prevArrow: "#sec_four_left_arrow",
    nextArrow: "#sec_four_right_arrow",
  });

  $("#sec_six_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    dots: false,
    prevArrow: "#sec_six_left_arrow",
    nextArrow: "#sec_six_right_arrow",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 1170,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  //  // case results

  //  if($('#case_results_wrapper').length >0 ){

  //  var macyInstance = Macy({
  //   container: '#case_results_wrapper',
  // 	columns: 3,
  // 	margin: {
  //     x: 100,
  //     y: 109,
  //   },
  // 	breakAt: {
  //     1695: {
  //       margin: {
  //         x: 35,
  //         y: 40,
  //       },
  //       columns: 3
  //     },
  //         1275: 2,
  //         767: {
  //           margin: {
  //             x: 0,
  //             y: 40,
  //           },
  //           columns: 1
  //         }

  //   }
  // });

  // }

  /* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go_back").on("click", function (e) {
    goBack();
  });

  // sidebar title double_line

  $('<span class="double_line"></span>').insertAfter(".widget h3");

  $('<span class="double_line blockquote"></span>').insertBefore("blockquote");

  $('<span class="double_line"></span>').insertAfter(
    "ul.pa_directory_top_menu > li > a"
  );

  //  sidebar current class

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".sidebar_box.sidebar_blog ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  $(".sidebar_box ul.menu > li.menu-item-has-children > a").on(
    "click",
    function (e) {
      $(this).next("ul.sub-menu").slideToggle(300);

      $(this).parent().toggleClass("active");
    }
  );

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $("#menu_wrapper").on("click", function (e) {
    $("#header_right").toggleClass("open");

    $("nav").slideToggle(400);
  });

  function navDesktop() {
    $("header nav").addClass("nav_desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav_tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav_desktop");

    $("header nav").addClass("nav_tablet");
  }

  function tabletClick() {
    //$(this).next('ul.sub-menu').slideToggle(350);

    $(this).next("ul.sub-menu").toggleClass("active");

    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");
  }

  // nav

  if ($(window).width() >= 1066) {
    navDesktop();
  }

  if ($(window).width() < 1066) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1066) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1066) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );
}); // document ready
