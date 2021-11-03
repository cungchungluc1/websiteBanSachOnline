window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "UA-18237123-1");
!(function (f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function () {
    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = "2.0";
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s);
})(
  window,
  document,
  "script",
  "https://connect.facebook.net/en_US/fbevents.js"
);
fbq("init", "456424685277275");
fbq("track", "PageView");
!(function (f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function () {
    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = "2.0";
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s);
})(
  window,
  document,
  "script",
  "https://connect.facebook.net/en_US/fbevents.js"
);
fbq("init", "2659587514306727");
fbq("track", "PageView");
(function (_, $) {
  $(document).ready(function () {
    var total_seconds = 2678848;
    _.sb__dotd.clock_489 = $("#sb_flash_sale_489").FlipClock(total_seconds, {
      countdown: true,
      clockFace: total_seconds > 86400 ? "DailyCounter" : "HourlyCounter",
      lang: {
        years: "years",
        months: "months",
        days: "Ngày",
        hours: "giờ",
        minutes: "phút",
        seconds: "giây",
      },
      callbacks: {
        start: function () {
          $(".flip-clock-divider", $(this.factory.$el)).wrap(
            "<div class='sb-flip-clock-item'></div>"
          );
          var deviderWraps = $(".sb-flip-clock-item", $(this.factory.$el));
          for (var i = 0; i < deviderWraps.length; i++) {
            var count = 0;
            while (!$(deviderWraps[i]).next().hasClass("sb-flip-clock-item")) {
              var elem = $(deviderWraps[i]).next().detach();
              $(deviderWraps[i]).append(elem);
              if (i == deviderWraps.length - 1 && ++count == 2) {
                $(".flip-clock-wrapper").addClass("wrapped");
                break;
              }
            }
          }
        },
      },
    });
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_489");
    if (elm.length) {
      $(
        ".ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)"
      ).css("width", "100%");
      var items = 3;
      var itemsDesktop = items - 1,
        itemsDesktopSmall = items - 2,
        itemsTablet = items - 3;
      if (items < 5) {
        itemsDesktop = itemsDesktopSmall = 3;
        itemsTablet = 2;
      } else if (items === 1) {
        itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
      }
      var itemsTabletSmall = 2,
        itemsMobile = 1;
      elm.owlCarousel({
        direction: "ltr",
        items: items,
        itemsDesktop: [1400, itemsDesktop],
        itemsDesktopSmall: [1230, itemsDesktopSmall],
        itemsTablet: [1060, itemsTablet],
        itemsTabletSmall: [768, itemsTabletSmall],
        itemsMobile: [576, itemsMobile],
        autoPlay: "2000",
        lazyLoad: true,
        slideSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["Trước", "Tiếp theo"],
        pagination: false,
      });
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_557");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_558");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_350");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_351");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_352");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_447");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_375");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_373");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_372");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_374");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_451");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_381");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_380");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_428");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_568");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_450");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_427");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_577");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_570");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_571");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_434");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_391");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_390");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_389");
    var item = 5,
      itemsDesktop = 4,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = "3000";
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    if (elm.length) {
      elm.owlCarousel({
        direction: "ltr",
        items: 5,
        itemsDesktop: [1247, itemsDesktopSmall],
        itemsDesktopSmall: [1008, 3],
        itemsTablet: [768, 2],
        itemsMobile: [320, 1],
        autoPlay: "3000",
        slideSpeed: 400,
        rewindSpeed: 400,
        stopOnHover: true,
        navigation: true,
        navigationText: ["", ""],
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
      });
      $(".owl-next, .owl-prev").click(loadImage);
      function vs_check_loaded(elem) {
        elem.trigger("owl.stop");
        images = $(".active img.lazyOwl", elm);
        active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
        if (elm.visible(true)) {
          active_anim.each(function () {
            $(this).one("load", loadImage());
          });
          images.each(function () {
            var img = $(this);
            img
              .one("load", function () {
                img.removeAttr("data-src");
                img.removeAttr("style");
                img.removeClass("lazyOwl");
                img.removeClass("vs_lazy_mobile");
                if (delay && windowWidth > 1006) {
                  elem.trigger("owl.play", delay);
                }
                return;
              })
              .attr("src", img.data("src"))
              .each(function () {
                if (this.complete) $(this).trigger("load");
              });
          });
        }
      }
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);

(function (_, $) {
  $.ceEvent("on", "ce.commoninit", function (context) {
    var elm = context.find("#scroll_list_474");
    var item = 3,
      itemsDesktop = 3,
      itemsDesktopSmall = 3;
    itemsTablet = 2;
    if (item > 3) {
      itemsDesktop = item;
      itemsDesktopSmall = item - 1;
      itemsTablet = item - 2;
    } else if (item == 1) {
      itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
    } else {
      itemsDesktop = item;
      itemsDesktopSmall = itemsTablet = item - 1;
    }
    itemsDesktopSmall = itemsTablet = 2;
    function loadImage() {
      var check_delay = 400 + 100;
      setTimeout(function () {
        check_animate();
      }, check_delay);
    }
    var delay = false;
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    function vs_check_loaded(elem) {
      elem.trigger("owl.stop");
      images = $(".active img.lazyOwl", elm);
      active_anim = $(".active .scroll-image,.active .jscroll-item", elm);
      if (elm.visible(true)) {
        active_anim.each(function () {
          $(this).one("load", loadImage());
        });
        images.each(function () {
          var img = $(this);
          img
            .one("load", function () {
              img.removeAttr("data-src");
              img.removeAttr("style");
              img.removeClass("lazyOwl");
              img.removeClass("vs_lazy_mobile");
              if (delay && windowWidth > 1006) {
                elem.trigger("owl.play", delay);
              }
              return;
            })
            .attr("src", img.data("src"))
            .each(function () {
              if (this.complete) $(this).trigger("load");
            });
        });
      }
    }
    function outsideNav(elem) {
      if (this.options.items >= this.itemsAmount) {
        $("#owl_outside_nav_474").hide();
      } else {
        $("#owl_outside_nav_474").show();
      }
      vs_check_loaded(elem);
    }
    if (elm.length) {
      elm.owlCarousel({
        items: item,
        direction: "ltr",
        itemsDesktop: [1199, itemsDesktop],
        itemsDesktopSmall: [979, itemsDesktopSmall],
        itemsTablet: [768, itemsTablet],
        itemsMobile: [479, 1],
        autoPlay: false,
        slideSpeed: 400,
        stopOnHover: true,
        pagination: false,
        addClassActive: true,
        afterInit: vs_check_loaded,
        afterMove: vs_check_loaded,
        afterInit: outsideNav,
        afterUpdate: outsideNav,
      });
      $("#owl_prev_474000").click(function () {
        elm.trigger("owl.prev");
      });
      $("#owl_next_474000").click(function () {
        elm.trigger("owl.next");
      });
      var owl = elm.data("owlCarousel");
      owl.stop();
      elm.addClass("stopped");
    }
  });
})(Tygh, Tygh.$);
if (!window.jQuery) {
    document.write(
      '<script type="text/javascript" src="https://nhasachphuongnam.com/js/lib/jquery/jquery-3.3.1.min.js?ver=1634210094" ><\/script>'
    );
    document.write(
      '<script type="text/javascript" src="https://nhasachphuongnam.com/js/lib/jquery/jquery-migrate-3.0.1.min.js?ver=1634210094" ><\/script>'
    );
  }
  (function (_, $) {
    _.tr({
      cannot_buy: "Bạn không thể mua các sản phẩm với các tùy chọn",
      no_products_selected: "Không có sản phẩm đã chọn",
      error_no_items_selected:
        "Không có mục được chọn! Phải chọn ít nhất một hộp kiểm để thực hiện hành động này.",
      delete_confirmation:
        "Bạn có chắc bạn muốn xóa các khoản mục đã chọn không?",
      text_out_of_stock: "Hết hàng",
      items: "sản phẩm",
      text_required_group_product:
        "Vui lòng chọn một sản phẩm cho nhóm yêu cầu [group_name]",
      save: "Lưu",
      close: "Đóng",
      notice: "Thông báo",
      warning: "Cảnh báo",
      error: "Lỗi",
      empty: "Trống",
      text_are_you_sure_to_proceed: "Bạn có chắc bạn muốn tiếp tục không?",
      text_invalid_url: "Bạn đã nhập một URL không hợp lệ",
      error_validator_email:
        "Địa chỉ email trong mục <b>[field]<\/b> là không hợp lệ.",
      error_validator_phone:
        "Số điện thoại trong mục <b>[field]<\/b> là không hợp lệ. Các định dạng chính xác là (555) 555-55-55 hoặc 55 55 555 5555.",
      error_validator_phone_mask:
        "The phone number in the <b>[field]<\/b> field is invalid.",
      error_validator_integer:
        "Giá trị của mục <b>[field]<\/b> là không hợp lệ. Nó phải là số nguyên.",
      error_validator_multiple:
        "MỤc <b>[field]<\/b> không chứa các tùy chọn được chọn.",
      error_validator_password:
        "Mật khẩu trong các mục <b>[field2]<\/b> và <b>[field]<\/b> không khớp.",
      error_validator_required: "Mục <b>[field]<\/b> là bắt buộc.",
      error_validator_zipcode:
        "ZIP/Mã bưu điện trong mục <b>[field]<\/b> là không chính xác. Định dạng đúng là [extra].",
      error_validator_message:
        "Giá trị của mục <b>[field]<\/b> là không hợp lệ.",
      text_page_loading:
        "Đang tải... Yêu cầu của bạn đang được xử lý, xin vui lòng chờ.",
      error_ajax:
        "Rất tiếc, một cái gì đó đã sai ([error]). Xin vui lòng thử lại.",
      text_changes_not_saved: "Thay đổi của bạn đã không được lưu.",
      text_data_changed:
        "Thay đổi của bạn chưa được lưu. Bấm OK để tiếp tục, hoặc hủy bỏ để ở lại trên trang hiện tại.",
      placing_order: "Đặt đơn hàng",
      file_browser: "Duyệt tập tin",
      browse: "Duyệt...",
      more: "Thêm",
      text_no_products_found: "Không tìm thấy sản phẩm",
      cookie_is_disabled:
        'Để có một trải nghiệm mua sắm đầy đủ, xin vui lòng <a href="http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser" target="_blank"> thiết lập trình duyệt của bạn để chấp nhận cookie<\/a>',
      insert_image: "Insert image",
      image_url: "Image URL",
      loading: "Đang tải...",
    });
    $.extend(_, {
      index_script: "index.php",
      changes_warning: "N",
      currencies: {
        primary: {
          decimals_separator: ".",
          thousands_separator: ",",
          decimals: "0",
        },
        secondary: {
          decimals_separator: ".",
          thousands_separator: ",",
          decimals: "0",
          coefficient: "1.00000",
        },
      },
      default_editor: "tinymce",
      default_previewer: "owl",
      current_path: "",
      current_location: "https://nhasachphuongnam.com",
      images_dir:
        "https://nhasachphuongnam.com/design/themes/responsive/media/images",
      notice_displaying_time: 5,
      cart_language: "vi",
      language_direction: "ltr",
      default_language: "vi",
      cart_prices_w_taxes: false,
      regexp: [],
      current_url: "home.html",
      current_host: "nhasachphuongnam.com",
      init_context: "",
      phone_validation_mode: "any_digits",
    });
    $(document).ready(function () {
      $.runCart("C");
    });
  })(Tygh, Tygh.$);
  (function (_, $) {
    _.tr({
      cannot_buy: "Bạn không thể mua các sản phẩm với các tùy chọn",
      no_products_selected: "Không có sản phẩm đã chọn",
      error_no_items_selected:
        "Không có mục được chọn! Phải chọn ít nhất một hộp kiểm để thực hiện hành động này.",
      delete_confirmation:
        "Bạn có chắc bạn muốn xóa các khoản mục đã chọn không?",
      text_out_of_stock: "Hết hàng",
      items: "sản phẩm",
      text_required_group_product:
        "Vui lòng chọn một sản phẩm cho nhóm yêu cầu [group_name]",
      save: "Lưu",
      close: "Đóng",
      notice: "Thông báo",
      warning: "Cảnh báo",
      error: "Lỗi",
      empty: "Trống",
      text_are_you_sure_to_proceed: "Bạn có chắc bạn muốn tiếp tục không?",
      text_invalid_url: "Bạn đã nhập một URL không hợp lệ",
      error_validator_email:
        "Địa chỉ email trong mục <b>[field]<\/b> là không hợp lệ.",
      error_validator_phone:
        "Số điện thoại trong mục <b>[field]<\/b> là không hợp lệ. Các định dạng chính xác là (555) 555-55-55 hoặc 55 55 555 5555.",
      error_validator_phone_mask:
        "The phone number in the <b>[field]<\/b> field is invalid.",
      error_validator_integer:
        "Giá trị của mục <b>[field]<\/b> là không hợp lệ. Nó phải là số nguyên.",
      error_validator_multiple:
        "MỤc <b>[field]<\/b> không chứa các tùy chọn được chọn.",
      error_validator_password:
        "Mật khẩu trong các mục <b>[field2]<\/b> và <b>[field]<\/b> không khớp.",
      error_validator_required: "Mục <b>[field]<\/b> là bắt buộc.",
      error_validator_zipcode:
        "ZIP/Mã bưu điện trong mục <b>[field]<\/b> là không chính xác. Định dạng đúng là [extra].",
      error_validator_message:
        "Giá trị của mục <b>[field]<\/b> là không hợp lệ.",
      text_page_loading:
        "Đang tải... Yêu cầu của bạn đang được xử lý, xin vui lòng chờ.",
      error_ajax:
        "Rất tiếc, một cái gì đó đã sai ([error]). Xin vui lòng thử lại.",
      text_changes_not_saved: "Thay đổi của bạn đã không được lưu.",
      text_data_changed:
        "Thay đổi của bạn chưa được lưu. Bấm OK để tiếp tục, hoặc hủy bỏ để ở lại trên trang hiện tại.",
      placing_order: "Đặt đơn hàng",
      file_browser: "Duyệt tập tin",
      browse: "Duyệt...",
      more: "Thêm",
      text_no_products_found: "Không tìm thấy sản phẩm",
      cookie_is_disabled:
        'Để có một trải nghiệm mua sắm đầy đủ, xin vui lòng <a href="http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser" target="_blank"> thiết lập trình duyệt của bạn để chấp nhận cookie<\/a>',
      insert_image: "Insert image",
      image_url: "Image URL",
      loading: "Đang tải...",
    });
    $.extend(_, {
      index_script: "index.php",
      changes_warning: "N",
      currencies: {
        primary: {
          decimals_separator: ".",
          thousands_separator: ",",
          decimals: "0",
        },
        secondary: {
          decimals_separator: ".",
          thousands_separator: ",",
          decimals: "0",
          coefficient: "1.00000",
        },
      },
      default_editor: "tinymce",
      default_previewer: "owl",
      current_path: "",
      current_location: "https://nhasachphuongnam.com",
      images_dir:
        "https://nhasachphuongnam.com/design/themes/responsive/media/images",
      notice_displaying_time: 5,
      cart_language: "vi",
      language_direction: "ltr",
      default_language: "vi",
      cart_prices_w_taxes: false,
      regexp: [],
      current_url: "home.html",
      current_host: "nhasachphuongnam.com",
      init_context: "",
      phone_validation_mode: "any_digits",
    });
    $(document).ready(function () {
      $.runCart("C");
    });
  })(Tygh, Tygh.$);

      (function (_, $) {
        _.geo_maps = {
          provider: "google",
          api_key: "AIzaSyDXGkgKIbU1b7laQJUG8yo0zAVt6h52Tnk",
          yandex_commercial: false,
          language: "vi",
        };
        _.tr({
          geo_maps_google_search_bar_placeholder: "Tìm kiếm",
          geo_maps_cannot_select_location:
            "This location couldn't be selected due to technical reasons. If you encounter any difficulties when placing an order, please contact us.",
        });
      })(Tygh, Tygh.$);
    
    
      (function (_, $) {
        $.extend(_, {
          sb__stickers: {
            timeouts: {},
            runtime: { controller_mode: "index.index", caching: Boolean(1) },
          },
        });
      })(Tygh, Tygh.$);
    
    
      (function (_, $) {
        $.extend(_, {
          sb__dotd: {
            current_dispatch: "index.index",
            current_promotion_id: 0,
            max_height: "250",
            more: "More",
            less: "Less",
          },
        });
      })(Tygh, Tygh.$);
    
    
      (function (_, $) {
        $.ceEvent("on", "ce.responsive_classes.ready", function () {
          var positionId = 3;
          if ("ltr" === "rtl") {
            positionId = $.ceImageZoom(
              "translateFlyoutPositionToRtl",
              positionId
            );
          }
          var $body = $("body", _.doc);
          $(".cm-previewer").each(function (i, elm) {
            var isMobile =
              $body.hasClass("screen--xs") ||
              $body.hasClass("screen--xs-large") ||
              $body.hasClass("screen--sm") ||
              $body.hasClass("screen--sm-large");
            if (isMobile && Modernizr.touchevents) {
              return false;
            }
            $.ceImageZoom("init", $(elm), positionId);
          });
        });
      })(Tygh, Tygh.$);
    
    
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          $("a.vs-social-toggle").click(function (e) {
            e.preventDefault();
            var self = $(this);
            var target = self.siblings(".vs-auth");
            target.toggleClass("hidden");
          });
        });
      })(Tygh, Tygh.$);
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2028");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_788");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: false,
              navigation: true,
              navigationText: ["", ""],
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2295");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2298");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2299");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2300");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
    
    
      //<![CDATA[
      (function (_, $) {
        $.ceEvent("on", "ce.commoninit", function (context) {
          var slider = context.find("#banner_slider_2301");
          var delay = "3000";
          var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;
          if (slider.length) {
            slider.owlCarousel({
              direction: "ltr",
              items: 1,
              singleItem: true,
              slideSpeed: 400,
              autoPlay: delay,
              stopOnHover: true,
              addClassActive: true,
              afterInit: vs_check_loaded,
              afterMove: vs_check_loaded,
              pagination: true,
            });
            owl = slider.data("owlCarousel");
            owl.stop();
            slider.addClass("stopped");
            function vs_check_loaded(elem) {
              elem.trigger("owl.stop");
              images = $(".active img.lazyOwl", slider);
              if (images !== null && images.length > 0) {
                if (slider.visible(true)) {
                  images.each(function () {
                    var img = $(this);
                    img
                      .one("load", function () {
                        img.removeAttr("data-src");
                        img.removeAttr("style");
                        img.removeClass("vs_lazy_mobile");
                        if (delay) {
                          elem.trigger("owl.play", delay);
                        }
                        return;
                      })
                      .attr("src", img.data("src"))
                      .each(function () {
                        if (this.complete) $(this).trigger("load");
                      });
                  });
                }
              } else {
                elem.trigger("owl.play", delay);
              }
            }
          }
        });
      })(Tygh, Tygh.$);
      //]]>
      (function (a, e, f, g, b, c, d) {
        a.EmaticsObject = b;
        a[b] =
          a[b] ||
          function () {
            (a[b].q = a[b].q || []).push(arguments);
          };
        a[b].l = 1 * new Date();
        c = e.createElement(f);
        d = e.getElementsByTagName(f)[0];
        c.async = 1;
        c.src = g;
        d.parentNode.insertBefore(c, d);
      })(
        window,
        document,
        "script",
        "//api.ematicsolutions.com/v1/ematic.min.js",
        "ematics"
      );
      var ematicApikey = "92334826216e11ea939d0242ac110002-sg4",
        opt = {
          country_iso: "vietnam",
          currency_iso: "vnd",
          language_iso: "vietnam",
        };
      ematics("create", ematicApikey, opt);
      var callback = function (a) {
          console.log(a);
          localStorage.removeItem("ematic_user");
        },
        ematic_user = localStorage.getItem("ematic_user");
      void 0 != ematic_user &&
        "" != ematic_user &&
        ((ematic_user = JSON.parse(ematic_user)),
        ematics(
          "subscribe",
          "",
          ematic_user.email,
          ematic_user.mergeVars,
          callback
        ));
        
      (function (a, b) {
        var c = a.getElementsByTagName("head")[0],
          d = a.location.protocol;
        a = a.createElement("script");
        a.type = "text/javascript";
        a.charset = "utf-8";
        a.async = !0;
        a.defer = !0;
        a.src = d + "//front.optimonk.com/public/" + b + "/js/preload.js";
        c.appendChild(a);
      })(document, "136977");
    
    
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function () {
        OneSignal.init({ appId: "139730cd-d051-4926-b950-72ce229ae9c7" });
      });
    
    
      if (null != document.querySelector(".ty-breadcrumbs__current")) {
        var productName = document.querySelector(".ty-breadcrumbs__current")
            .innerText,
          productUrl = window.location.hostname + window.location.pathname;
        OneSignal.push(function () {
          var a = Math.floor(Date.now() / 1e3);
          OneSignal.sendTags({
            browse_update: a,
            category_update: "",
            category_url: "",
            cart_update: "",
            checkout_update: "",
            product_name: productName,
            page_url: productUrl,
          }).then(function (b) {
            console.log("tagsSent: ", b);
          });
        });
      }
    
    
      OneSignal.push([
        "addListenerForNotificationOpened",
        function (c) {
          var d = Math.floor(Date.now() / 1e3);
          OneSignal.sendTag("ln_click", d);
          console.log("Received Payload Data: ", c.data);
          var b = c.data.topic;
          b &&
            OneSignal.getTags().then(function (a) {
              a = parseInt(a[b], 10);
              console.log("topicCount: ", a);
              a = isNaN(a) ? 1 : a + 1;
              OneSignal.sendTag(b, a).then(function (e) {
                console.log("tagsSent: ", JSON.stringify(e));
              });
            });
        },
      ]);
    