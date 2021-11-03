
var scroll_time = 500;
var page_top_limit = 100;
$(function () {
    //$.ajax({
    //    type: "POST",
    //    dataType: "json", 
    //    data: { "action": "insert", "api_key": "jKxdmQdDIuTfd8NXLHSO1479433407675", "api_secret": "Y09DcaLbIhKVbKvikWfI1479433408316", "category_id": "33,34,35", "description": "description test", "from_date": "17/11/2016 00:00:00", "to_date": "30/11/2016 00:00:00", "image": "image test", "promotion_name": "Test promotion name", "url": "//bookbuy.vn" },
    //    url: "http://api.onlinefriday.vn/business/importpromotion",
    //    async: false,
    //    success: function (data) {
    //        debugger;
    //    },
    //    error: function (a, b, c) {
    //        debugger;
    //    }
    //});
    //Add by mongvd 2015/11/17
    //$('.adv').advScroll({
    //    easing: 'easeOutBack',
    //    timer: 1000
    //});
    //end 
    //Add by mongvd 
    genHtmlUser = function () {
        $.get('/api/MailBoxApi/CheckMailNew', function (data) {
            if (data > 0) {
                $(".user-notify .icon-notify").addClass('show');
            }
            $("#btn-user-detail").popover({
                html: true,
                content: "<ul class='user-func-lst'>{0}</ul>".format($("ul.user-func-lst").html()),
                trigger: 'hover',
                placement: 'bottom',
                container: '#btn-user-detail'
            });
        })
    }
    $.ajax({
        url: '/BookBuy/getHtmlUser',
        type: 'Get',
        success: function (data) {
            if (data != "") {
                $(".has-user-info").append(data);
                genHtmlUser();
            }
            //ematic email
            (function (i, s, o, g, r, a, m) {
                i['EmaticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//api.ematicsolutions.com/v1/ematic.min.js', 'ematics');
            var ematicApikey = "7c319d6019e211e7be9a0242ac110002-sg6";
            var opt = {
                email: $("#CurrentUserEmail") != null ? $("#CurrentUserEmail").val() : "",
                country_iso: "vietnam",
                currency_iso: "VND",
                language_iso: "VN"
            };
            //define the event before initializing
            opt.events = {
                onAfterSubscribe: function (email) {
                    $.ajax({
                        url: "/MailchimpAPI/UpdateMember",
                        dataType: "json",
                        data: { "email": email },
                        success: function (data) {
                        }
                    });
                    //execute your code
                }
            };
            //initialize
            ematics("create", ematicApikey, opt);
        }
    });

    $.ajax({
        url: '/BookBuy/getHtmlUserMobile',
        type: 'Get',
        success: function (data) {
            if (data != "") {
                $(".has-user-info-mobile").prepend(data);
            }
        }
    });
    $.get('/api/News/CheckNewsNew', function (data) {
        if (data) {
            $("#btn-news-trigger").append('<img  class="slimmage icon-new-hightlight" src="/Images/frontend/base/icon_new.gif" /> ');
        }
    })

    $.get('/api/PromotionApi/CheckPromotionNew', function (data) {
        if (data) {
            $("#btn-prmotion-trigger").append('<img class="slimmage icon-new-hightlight" src="/Images/frontend/base/icon_new.gif" /> ');
        }
    })

    $(".header-newsletter-toggle").click(function () {
        if ($(".newsletter-toggle").hasClass("active")) {
            $(".newsletter-toggle span.toggle-error").empty();
            $(".newsletter-toggle span.toggle-success").empty();
            $(".newsletter-toggle").removeClass("active");
        }

        else
            $(".newsletter-toggle").toggleClass("active")
    });
    setTimeout(function () {
        if (!ParseBool(readCookie('registedEmail')))
            $(".newsletter-toggle").css("display", "block")
    }, 20000);

    $(".navbar-collapse ul li").removeClass("active");
    var lastScrollTop = 0;
    $(window).scroll(function () {
        var scrollPosition = $(this).scrollTop();

        //if (scrollPosition < lastScrollTop) {
        if (scrollPosition > 80) {
            $('.mn-topmost-new').addClass('mn-topmost-new-fixed').removeClass('mn-topmost-new').animate();
        } else {
            $('.mn-topmost-new-fixed').addClass('mn-topmost-new').removeClass('mn-topmost-new-fixed');
        }
        // };
        lastScrollTop = scrollPosition;
    });
    var minWidth = $(window).width(),
    handleMinWidthMedia = function (width) {
        if (width <= 1024) {
            $("#fblike").hide();
            $("#ggplus").hide();
        }
        else if (width > 1024 && width < 1200) {
            $("#ggplus").hide();
            $("#fblike").show();
        }
        else {

            $("#fblike").show();
            $("#ggplus").show();

        }
    };
    handleMinWidthMedia(minWidth);
    $(window).resize(function () {
        minWidth = $(window).width();
        handleMinWidthMedia(minWidth);
        //var widthPopup = ($(window).width() - $(".popimg").width()) / 2;
        //$(".popimg").css("left", widthPopup);
        //$(".popimg").css("height", $(".popimg img").height() + 10);
    });

    //$(window).resize(function () {
    //    if (mql.matches) { // if media query matches
    //        alert("Lớn hơn 600px")
    //    }
    //    else {
    //        alert("Nhỏ hơn 600px")
    //    }

    //});
    //end

    jQuery.extend(jQuery.validator.methods, {
        date: function (value, element) {
            var isChrome = window.chrome;
            if (isChrome) {
                var d = new Date();
                return this.optional(element) ||
                !/Invalid|NaN/.test(new Date(d.toLocaleDateString(value)));
            }
            else {
                return this.optional(element) ||
                !/Invalid|NaN/.test(new Date(value));
            }
        }
    });

    $(".navbar-right").on("click", "#btn-logout", function () {
        $("form#logoutForm").submit();
    })
    $(".panel-mb").on("click", "#btn-logout-mb", function () {
        $("form#logoutForm").submit();
    })

    $('.menu-cat-mobile .panel-body .list-group-item').on('click', function () {
        $('.bs-navbar-collapse').collapse('hide');
    });
    $(".main-menu .childmenu-box").each(function () {
        var items_per_box = 9;
        var items;
        items = $("ul li:first a", $(this)).size();
        var self = $(this);
        while (items > items_per_box) {
            $("<li></li>")
                .append($("ul li:first a", self).slice(items_per_box, items_per_box * 2))
                .appendTo($("ul", self));
            items = $("ul li:first a", self).size();
        }
    });

    $(".main-menu .menu-trigger").on({
        "mouseenter": function () {
			$(".menu-box").show();
			//$(".menu-trigger a.thumb").removeClass('none-bottom-bd');
        }, "mouseleave": function () {
			$(".menu-box").hide();
			//$(".menu-trigger a.thumb").addClass('none-bottom-bd');
        }
    });
    //  var x, y;
    var $menu = $(".main-menu ul.menu");

    // jQuery-menu-aim: <meaningful part of the example>
    // Hook up events to be fired on menu row activation.
    $menu.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu,
        exit: exitSubmenu
    });

    function activateSubmenu(row) {
        $(".main-menu ul.menu>li:hover a").addClass('actived');
        $(".childmenu-box", $(row)).show();
    }

    function deactivateSubmenu(row) {
        $(".main-menu ul.menu>li a").removeClass('actived');
        $(".childmenu-box", $(row)).hide();
    }
    function exitSubmenu(row) {
        setTimeout(function () {

            if ($('.childmenu-box:hover').length == 0 && $(".main-menu ul.menu>li:hover").length == 0) {
                $(".main-menu ul.menu>li a").removeClass('actived');
                $(".childmenu-box", $(row)).hide();

            }
        }, 200);

    }
    //$(".main-menu ul.menu>li").on({
    //    "mouseenter": function (e) {
    //        var temp = $(this);
    //       // console.log(Math.abs(x - e.clientX));
    //       // if (Math.abs(x - e.clientX) < 20)
    //        // setTimeout(function () { $(".childmenu-box", temp).show(); }, 1000);
    //        var randomTimeout = Math.round(Math.random() * 10) / 50 + "s";
    //        $(this).css({
    //            '-webkit-transition-delay': randomTimeout,
    //            'transition-delay': randomTimeout
    //        })
    //            $(".childmenu-box", temp).show();


    //      //  x = e.clientX;
    //      //  y = e.clientY;

    //    }, "mouseleave": function (e) {
    //        var temp = $(this);
    //       // console.log(Math.abs(x - e.clientX));
    //        //if (Math.abs(x - e.clientX) < 20)
    //        // return false; // setTimeout(function () { $(".childmenu-box", temp).hide(); }, 1000);
    //        var randomTimeout = Math.round(Math.random() * 10) / 50 + "s";
    //        $(this).css({
    //            '-webkit-transition-delay': randomTimeout,
    //            'transition-delay': randomTimeout
    //        })
    //         $(".childmenu-box", temp).hide();

    //        // x = e.clientX;
    //        // y = e.clientY;



    //    }
    //});

    var menuids = ["rootmenu"];
    BookBuy.Menu.SideBarMenu(menuids);



    // $(".main-menu .menu").jqueryMenu();

    var hover_timer, delay_timer;
    var scope = angular.element("body").scope()
    var productFac = angular.element("body").injector().get('productFac');
    $("#bb-body").on("mouseenter", ".product-item .img-view:not(.week-book .product-item .img-view), .product-item-inline .img-view", function () {
        var self = $(this);
        delay_timer = setTimeout(function () {
            var isout = self.attr("isout"),
            iscomming = self.attr("iscomming"),
            btn_cart = $("#express-buy-dialog").find(".btn-buy"),
            productid = self.attr("productid"),
            btn_pre = $("#express-buy-dialog").find(".btn-pre"),
            btn_request = $("#express-buy-dialog").find(".btn-request"),
            hid_id = $("#express-buy-dialog").find(".productid");
            hid_id.val(productid);


            if (hover_timer) hover_timer = clearTimeout(hover_timer);
            var pos = self.offset();
            var ex_w = $("#express-buy-dialog").width();
            var item_w = self.width();
            var l;
            if (pos.left + item_w + ex_w > $(window).width()) {
                l = pos.left - ex_w;
                if (l < 0)
                    l = 0;
                $("#express-buy-dialog")
                    .addClass("express-buy-l")
                    .removeClass("express-buy-r");
            }
            else {
                l = pos.left + item_w;
                if (l < 0)
                    l = 0;

                $("#express-buy-dialog")
                    .addClass("express-buy-r")
                    .removeClass("express-buy-l");
            }
            $("#express-buy-dialog")
                .css({ 'top': pos.top, 'left': l })
                .fadeIn();



            $("#express-buy-dialog .loading").bbLoading();

            productFac.productDetail(productid).success(function (data) {
                scope.productItem = data;
                $("#express-buy-dialog .loading").bbLoading('stop');
                setTimeout(function () {
                    $(".fussed-choose .fussed-list input.ischoonse:first-child").addClass("active");
                    $(".fussedid").val($(".item-fussed.active").attr("rel"));
                }, 500);
            });
        }, 300);


    }).on("mouseleave", ".product-item, .product-item-inline", function () {
        hover_timer = setTimeout(function () {
            $("#express-buy-dialog").hide();
            $(".express-loading").hide();
            scope.productItem = null;
        }, 300);
        if (delay_timer) delay_timer = clearTimeout(delay_timer);
        $(".Sizes").val("");
        $(".size-choose .bg-size span").on("click", function () {
            //$(".des-detail-r .tooltip span").css("display", "none");
            $(".bg-size span").removeClass("actived");
            $(this).addClass("actived");
            scope.SizeID = $(this).parent().attr("data");
            $(".Sizes").val(scope.SizeID);
            //$(".size-choose #Sizes").val($(this).parent().attr("data"));
            return;

        });

        $(".colorid").val("");
        $("#express-buy-dialog").on("click", ".color-choose .bg-size .color-item", function () {
            $(".bg-size .color-item").removeClass("actived");
            $(this).addClass("actived");
            scope.colorid = $(this).attr("data");
            $(".colorid").val(scope.colorid);
            return;
        });

        $("#express-buy-dialog").on("click", ".fussed-choose .fussed-list .item-fussed", function () {
            $(".fussed-choose .fussed-list .item-fussed").removeClass("active");
            $(this).addClass("active");
            scope.fussedid = $(this).attr("rel");
            $(".fussedid").val(scope.fussedid);
            return;
        });

    });

    $("#express-buy-dialog").mouseenter(function () {
        if (hover_timer) hover_timer = clearTimeout(hover_timer);
    }).mouseleave(function () {
        hover_timer = setTimeout(function () {
            $("#express-buy-dialog").hide();
            $(".express-loading").hide();
            scope.productItem = null;
        }, 300);
    });


    $("#express-buy-dialog").on("click", ".btn-request", function () {
        var productid = scope.productItem.ID;
        if ($("#CurrentUserID").val() != undefined) {
            RequestInfoMember(productid);
            $("#express-buy-dialog").hide();
            $(".express-loading").hide();
        }
        else {

            $("#request-info-dialog #RequestInfo_ProductID").val(productid);
            $("#request-info-dialog").modal("show");

            $("#express-buy-dialog").hide();
            $(".express-loading").hide();
            scope.productItem = null;
        }


    });

    $("#express-buy-dialog .btn-fav").on("click", function () {
        $("#express-buy-dialog").hide();
        $(".express-loading").hide();
        scope.productItem = null;
        $(this).parent().submit();
    });


    $("#express-buy-dialog .btn-buy, #express-buy-dialog .btn-pre").on("click", function () {
        if ($(this).hasClass('add-to-cart'))
            $("#express-buy-dialog").hide();
        $(".express-loading").show();
        scope.productItem = null;
    });

    var login_html =
        "<a href='/dang-nhap.html' class='btn btn-bb'>Tài khoản BookBuy</a>\
        <br />\
         <a href='/login/facebook?returnurl={0}' class='btn btn-fb'>\
            <i class='fa fa-facebook'></i>\
            Tài khoản Facebook\
         </a>".format(window.location.href);

    $("#btn-login-trigger").popover({
        html: true,
        content: login_html,
        trigger: 'hover',
        placement: 'bottom',
        container: '#btn-login-trigger'
    });


    $.get('/api/News/NewsCollectionByID/6/1/3', function (data) {
        var html = "";
        for (var i = 0; i < data.length; i++) {
            html += "\
                <li>\
                    <div class='l'>\
                        <a href='{0}'>{1}</a>\
                    </div>\
                    <div class='r'>\
                        <img class='slimmage' src='/Res/Images/Event/{2}?w=80' />\
                        {3} </div>\
                    <div class='clearfix'></div>\
                </li>".format(data[i].Link, data[i].Title, data[i].URL, data[i].IsNew ? '<img class="slimmage" src="/Images/frontend/base/icon_new.gif" />' : '')
        }
        if (html != "") {
            $("#btn-news-trigger").popover({
                html: true,
                title: 'Tin mới',
                content: "<ul class='popup-news'>{0}</ul>".format(html),
                trigger: 'hover',
                placement: 'bottom',
                container: '#btn-news-trigger'
            });
        }
    })






    //gift info
    $(".product-item i.gift").tooltip();


    $("#Term, #TermTop").onTextEnter({ btnToTrigger: $(".button-search") });
    $("#TermTop").onTextEnter({ btnToTrigger: $(".button-search-top") });

    var productType = 0;
    var xhrp = undefined;
    $("#Term, #TermTop").on('keydown', function (e) {
        if (e.which == 38 || e.which == 40) {
            $(".dropdown-menu li").removeClass("item-active");
        }
    }).autocomplete({
        delay: 0,

        source:
             function (request, response) {
                 if (xhrp != undefined) {
                     xhrp.abort();
                     xhrp = undefined;
                 }
                 xhrp = $.ajax({
                     url: "/BookBuy/SearchResultVirtual",
                     dataType: "json",
                     data: { "term": request.term },
                     success: function (data) {
                         $.ajax({
                             url: "/BookBuy/SearchResultJson?type=" + productType + "&term=" + data,
                             dataType: "json",
                             success: function (data) {
                                 response($.map(data, function (item) {
                                     return item;
                                 }));
                             }
                         });

                     }
                 });
             },
        select: function (evt, ui) {
            var url = "";
            if (ui.item.Link != "" && ui.item.Link != null)
                url = ui.item.Link;
            else
                url = "/tim-kiem?key={0}&cat={1}&page=1".format(ui.item.Title.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '').replace(/\s{1,}|[?<>#^'="*&$]/g, "+"), productType);
            window.location.href = url;
        },
        focus: function (evt, ui) {
            // $("#Term").val(ui.item.Title);
            $(".dropdown-menu li").removeClass("item-active");
            var liActive = $("li[data='" + ui.item.FocusIndex + "']");
            if (liActive != undefined)
                liActive.addClass("item-active");
            return false;
        }
    })
    $.ui.autocomplete.prototype._renderItem = function (ul, item) {
        ul.attr("class", "");
        ul.addClass("dropdown-menu")

        ul.append(item.URL != null && $(".dropdown-menu .header-auto-search").length == 0 ? "<li class='h3 header-auto-search'>Sản phẩm liên quan</li>" : "");
        return $("<li data='{0}'></li>".format(item.FocusIndex))
            .data("item.autocomplete", item)
            .append("<a class='item-search'>{0}<span>{1}</span><span class='spanprice'>{2}</span></a> <div class='clearfix'></div>".format(item.URL != null ? "<img class='slimmage item-img' src='//bookbuy.vn/Res/Images/Product/{0}?width=40' />".format(item.URL) : "", item.Title, item.Price != null ? (item.RealPrice != item.Price ? "<span class='realprice'>" + item.RealPrice.formatMoney(0, '.', ',') + " ₫ </span><span class='price'>" + item.Price.formatMoney(0, '.', ',') + " ₫ </span> " : "<span class='realprice'>" + item.Price.formatMoney(0, '.', ',') + " ₫ </span>") : ""))
            .appendTo(ul);
    }



    goTop();

    //search
    $(".button-search").click(function () {
        var txt = $.trim($("#Term").val());


        if (txt != "" && txt != $("#Term").attr("data")) {
            var url = "";
            $.ajax({
                url: '/BookBuy/SearchResultJsonForEnter',
                type: 'Post',
                async: false,
                data: { term: txt },
                success: function (data) {
                    if (data.Link != "") {
                        url = data.Link;
                    }
                }
            });
            if (url == "")
                url = "/tim-kiem?key={0}&cat={1}&page=1".format(txt.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '').replace(/\s{1,}/g, "+"), productType);
            window.location.href = url;
        }
    });
    $(".button-search-top").click(function () {
        var txt = $.trim($("#TermTop").val());


        if (txt != "" && txt != $("#TermTop").attr("data")) {
            var url = "";
            $.ajax({
                url: '/BookBuy/SearchResultJsonForEnter',
                type: 'Post',
                async: false,
                data: { term: txt },
                success: function (data) {
                    if (data.Link != "") {
                        url = data.Link;
                    }
                }
            });
            if (url == "")
                url = "/tim-kiem?key={0}&cat={1}&page=1".format(txt.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '').replace(/\s{1,}/g, "+"), productType);
            window.location.href = url;
        }
    });

    $(".search-new-box .dropdown-menu li a").on("click", function () {
        productType = $(this).attr("cat");
        $("#Term").autocomplete("option", "source", "/BookBuy/SearchResultJson?type=" + productType);
        $(".search-new-box .btn-category").html($(this).text() + "<span class='caret'></span>");
    });

    $(".popout .toggle i.fa").on("click", function () {
        if (!$(this).parent().attr("data") || $(this).parent().attr("data") == "1") {
            $(this).parent().attr("data", "0");
            $(".popout").animate({ "bottom": "-200px" });
            $(".popout .toggle i.fa-plus").show();
            $(".popout .toggle i.fa-minus").hide();
        }
        else {
            $(this).parent().attr("data", "1");
            $(".popout").animate({ "bottom": "0px" });
            $(".popout .toggle i.fa-plus").hide();
            $(".popout .toggle i.fa-minus").show();
        }
    })
    $(".bt-close-float-ev").on("click", function () {
        $(".float-banner-ev-bottom").hide();
        createFlagSession('popupBottom');
    })

    setTimeout(function () {
        if (!readFlagSession("popupBottom") && $(".float-banner-ev-bottom").length > 0) {
            $(".float-banner-ev-bottom").show();
        }
    }, 8000);
    //Popup right
    //setTimeout(function () {
    //    if (!readFlagSession("popupRight")) {
    //        $('#paneltool .paneltool').toggleClass('active');
    //    }
    //}, 2000);
    $('#paneltool .panelbutton, #paneltool .panelbutton-right').click(function () {

        $('#paneltool .paneltool').toggleClass('active');
        //if (!$('#paneltool .paneltool').hasClass("active")) {
        //    createFlagSession('popupRight');
        //}
    });
    //End Popup right
    $(".popimg .toggle i.fa, .popimg .view-link").on("click", function () {
        $(".popimg").hide();
        createCookie('closedPopup', "true", 1 / 24);
    })
    $(".popimg-mb .toggle i.fa, .popimg-mb .view-link").on("click", function () {
        $(".popimg-mb").hide();
        createCookie('closedPopup', "true", 1 / 24);
    })
    if (ParseBool(readCookie("closedPopup"))) {
        $(".popimg").hide();
        $(".popimg-mb").hide();
    }

    //var widthPopup = ($(window).width() - $(".popimg").width()) / 2;
    //$(".popimg").css("left", widthPopup);
    //$(".popimg").css("height", $(".popimg img").height()+10);

    //$(".popshipping-alert .toggle i.fa, .popshipping-alert .view-link").on("click", function () {
    //    $(".popshipping-alert").hide();
    //        createCookie('closedPopup', "true", 1);
    //})

    //$(".popnewyear-mb .toggle i.fa").on("click", function () {
    //    $(".popnewyear-mb").hide();
    //    createCookie('closedPopup', "true", 1);
    //})

    //if (ParseBool(readCookie("closedPopup")))
    //{
    //    $(".popshipping-alert").hide();
    //}

    //Init animation
    //  $(".popshipping-alert").removeClass("pp-hidden")
    //  wow = new WOW(
    //  {
    //      animateClass: 'animated',
    //      offset: 100,
    //      callback: function (box) {

    //      }
    //  }
    //);
    //  wow.init();
    //end

    // popup thong bao tet 2016
    if (!ParseBool(readCookie("closedPopupTet")) && $("#popup-tet-dialog").length > 0) {
        $("#popup-tet-dialog").modal('show');
    }
    $('#popup-tet-dialog').on('hidden.bs.modal', function () {
        createCookie('closedPopupTet', true, 1);
    });

    //end   
    // popup thong bao chuyen dia diem
    //if (!ParseBool(readCookie("closedPopupChangAddress")) && $("#popup-dialog").length > 0) {
    //    $("#popup-dialog").modal('show');
    //}
    //$('#popup-dialog').on('hidden.bs.modal', function () {
    //    createCookie('closedPopupChangAddress', true, 1);
    //});

    //end  
    // popup thong bao chuyen dia diem
    //if (!ParseBool(readCookie("closedPopupBannerBirthday")) && $("#popup-dialog").length > 0) {
    //    setTimeout(function () { $("#popup-dialog").modal('show'); }, 8000);
    //}
    //$('#popup-dialog').on('hidden.bs.modal', function () {
    //    createCookie('closedPopupBannerBirthday', true, 1);
    //});

    //For LOCTET
    function createCode() {
        $.ajax({
            url: '/mirosite/CreateCodeLocTet',
            type: 'POST',
            dataType: "json",
            success: function (data) {
                if (data.Code != 0 && data.IsMember) {
                    $('#popup-receive-dialog .block-bottom-popup').hide();
                    $('#popup-receive-dialog .block-top-popup').empty().append("<p style='font-size: 15px;'>Mã code đã được gửi về hộp thư của bạn, <a style='color:#CDDC39' href='/hop-thu-den/1.html'>Xem hộp thư ></></p>");
                    vouCher = data.Code;
                }
                else if (data != 0) {
                    $('#popup-receive-dialog .code-label').empty().append(data.Code);
                    vouCher = data.Code;
                }
            }
        });
    }
    $(".bottom-share-fb").click(
    function (event) {
        event.preventDefault();
        var that = $(this);
        var post = that.parents('article.post-area');
        $.ajaxSetup({ cache: true });
        $.getScript('//connect.facebook.net/en_US/sdk.js', function () {
            FB.init({
                appId: '560626247431723',
                version: 'v2.6' // or v2.0, v2.1, v2.0
            });
            FB.ui({
                method: 'share',
                picture: '//bookbuy.vn/Res/Images/Event/27f05372-3afe-4585-afde-51badcb5e550.png',
                title: 'THANH TOÁN TRƯỚC - GIẢM CƯỚC NGAY!',
                description: 'Hoàn tiền đến 200,000đ cho đơn hàng nhập mã LOCTET & thanh toán trước từ 14.1 - 2.2. Double BBxu cho bình luận sản phẩm được duyệt.',
                href: 'http://bit.ly/trackingLOCTET',
            },
              function (response) {
                  if (response && !response.error_code) {

                      createCode();
                      createFlagSession('popupCalender');
                      $('#popup-dialog').modal("hide");
                      $('#popup-receive-dialog').modal("show");
                  } else {
                      $('#popup-dialog').modal("hide");
                  }
              });
        });
    });
    $("#sent-code-vuitet").click(function () {
        if ($("#email-sentcode-vuitet").val() == null || $("#email-sentcode-vuitet").val() == "") {
            $("#alert-vuitet").empty().append("Bạn chưa nhập email!").show();
            return;
        }
        $.ajax({
            url: '/mirosite/SentMailReceiveCode',
            type: 'POST',
            dataType: "json",
            data: { email: $("#email-sentcode-vuitet").val(), voucher: vouCher, ismailLetter: $("#cb-email-letter").prop("checked") },
            success: function (data) {
                if (data.data == 1) {
                    $("#alert-vuitet").empty().append("Mã code đã được gửi tới mail của bạn!").show();
                }
                else {
                    $("#alert-vuitet").empty().append("Có lỗi quá trình gửi mail! bạn vui lòng copy mã code lưu về máy để sử!").show();
                }
            }
        });
    })
    setTimeout(function () {
        if (!readFlagSession("popupCalender") && $("#popup-dialog").length > 0) {
            $("#popup-dialog").modal('show');
            var vouCher = 0;

        }
    }, 6000);
    $('#popup-dialog').on('hidden.bs.modal', function () {
        createFlagSession('popupCalender');
    });
    $('#popup-event20160420 a').on('click', function () {
        createCookie('closedPopup20160420', true, 1);
    });

    //window.onbeforeunload = function () {
    //    if (!validNavigation) {
    //        createCookie('closedPopupBannerBirthday', true, -1);
    //    }
    //}
    //end  

    // popup thong bao tang gap doi xu 20160420
    if (!ParseBool(readCookie("closedPopup20160420")) && $("#popup-event20160420").length > 0) {
        $("#popup-event20160420").modal('show');
    }
    $('#popup-event20160420').on('hidden.bs.modal', function () {
        createCookie('closedPopup20160420', true, 1);
    });
    $('#popup-event20160420 a').on('click', function () {
        createCookie('closedPopup20160420', true, 1);
    });

    //end  

    $("#btnTopNewsLetter, #btnBottomNewsLetter").on("click", function () {
        $("#email-letter-dialog").modal("show");
    });
	$("#btnTopEmailLetterRegister").click(function () {
        $("#email-letter-dialog .modal-body").bbLoading();
        if (!BookBuy.Email.IsValid($("#TopEmailLetter").val())) {
            $("span.top-error").empty().html("Email không đúng !");
            $("#email-letter-dialog .modal-body").bbLoading('stop');
        }
        else {
            $("#top-form-emailletter").submit();
        }
	});
	$(".submit-letter-botton").click(function () {
		var gender = $(this).data('gender');
		$('.sexId').val(gender);
		$("#email-letter-dialog .modal-body").bbLoading();
		if (!BookBuy.Email.IsValid($("#TopEmailLetter").val())) {
			$("span.top-error").empty().html("Email không đúng !");
			$("#email-letter-dialog .modal-body").bbLoading('stop');
		}
		else {
			$("#top-form-emailletter").submit();
		}
	});

    $(".submit-letter-toggle").click(function () {
        var gender = $(this).data('gender');
        $('#sexIdToggle').val(gender);
        if (!BookBuy.Email.IsValid($("#emaillettertoggle").val())) {
            $(".newsletter-toggle span.toggle-error").empty().append("Email không đúng !");
        }
        else {
            $("#emailletter-toggle").submit();
        }
    });
    $(".action-submit li").click(function (e) {
        if (e.target.localName != 'a') {
            $($(this).find('a')[0]).trigger('click');
        }
        else {
            return false;
        }
    })
    $(".submit-letter-canh-cam").click(function () {
        var gender = $(this).data('gender');
        $('#sexId').val(gender);
        if (!BookBuy.Email.IsValid($("#submit-letter").val())) {
            $(".form-letter .entry-form span.toggle-error").empty().append("* Email không đúng !");
        }
        else {
            $("#emailletter-bottom").submit();
        }
    });

    //Khoi tao popup gio hang

    $("#checkoutform button[type=submit], #checkoutform input[type=submit],#checkoutformmb button[type=submit], #checkoutformmb input[type=submit], #express-buy-dialog input[type=submit]").click(function () {
        $("input[type=submit]", $(this).parents("form")).removeAttr("clicked");
        $("button[type=submit]", $(this).parents("form")).removeAttr("clicked");
        $(this).attr("clicked", "true");
        if ($(this).hasClass("buy-now"))
			$(this).parents("form").find("#actiontype").val('buy-now');
		else if ($(this).hasClass("buy-tragop"))
			$(this).parents("form").find("#actiontype").val('tragop');
        else
            if ($(this).hasClass("add-to-cart")) {
                var productid = $(this).parents("form").find("input[name='productid']").val();
                if (productid != null && productid != undefined) {
                    productFac.productDetail(productid).success(function (data) {
                        scope.productCartItem = data;
                        scope.productCartItem.URL = "//bookbuy.vn/Res/Images/Product/" + scope.productCartItem.URL + "?width=140";

                    });
                }
                $(this).parents("form").find("#actiontype").val('add-to-cart');
            }

    });
    //end
});
function EmailRegisterBottomSuccess(response) {

    if (response.error == 0) {
        $(".form-letter .entry-form span.toggle-error").empty();
        $(".form-letter .entry-form span.toggle-success").empty().append(response.msg);
        $("#submit-letter").val('');
        createCookie('registedEmail', "true", 1);
        setTimeout(function () { $(".newsletter-toggle").css("display", "none"); }, 5000)
    }
    else {
        $("span.toggle-error").empty().append(response.msg);
    }

}
function EmailRegisterBottomFailure(response) {

    $(".form-letter .entry-form span.toggle-error").empty().append(response.msg);

}
function TopEmailRegisterSuccess(response) {
    $("#email-letter-dialog .modal-body").bbLoading('stop');
    $("#email-letter-dialog").modal("hide");
    $("#email-register-success-dialog").modal("show");
}
function TopEmailRegisterFailure(response) {
    $("span.top-error").html(response.msg);
    $("#email-letter-dialog .modal-body").bbLoading('stop');
}

function EmailRegisterToggleSuccess(response) {

    if (response.error == 0) {
        $(".newsletter-toggle span.toggle-error").empty();
        $(".newsletter-toggle span.toggle-success").empty().append(response.msg);
        $("#emaillettertoggle").val('');
        createCookie('registedEmail', "true", 1);
        setTimeout(function () { $(".newsletter-toggle").css("display", "none"); }, 5000)
    }
    else {
        $(".newsletter-toggle span.toggle-error").empty().append(response.msg);
    }

}
function EmailRegisterToggleFailure(response) {

    $(".newsletter-toggle span.toggle-error").empty().append(response.msg);

}
function delay(object) {
    $(object).css("display", "none");
}
var detectButtonSubmit;
function AddToCartBegin(productid) {
    var shoppingCartId = readCookie('BBNewShoppingCartID');
    if (shoppingCartId != null && shoppingCartId != '') {
        var result = checkproductInCart(shoppingCartId);
        var itemCart = $.grep(result, function (n, i) {
            return n.ID == productid;
        })[0];

        if (itemCart != undefined && itemCart != null) {
            var check = confirm("Đã có " + itemCart.Quantity + " sản phẩm này trong giỏ hàng, Ok để mua thêm, Cancel để tới trang giỏ hàng!");
            if (!check) {
                setTimeout(function () {
                    location.href = '/gio-hang.html';
                }, 200);
                return false;
            }

        } 
    }
    //test  
    if ($(".p-view .size-choose .content").attr("data") == 'true' && $(".size-choose .bg-size span").hasClass("actived") == false) {
        $("#post-success-dialog .modal-title").text("Lỗi");
        $("#post-success-dialog .modal-body").html("<p style='font-size: 15px;'>Chưa chọn size !</p>");
        $("#post-success-dialog").modal('show');
        $(".express-loading").hide();
        return false;
    }
    if ($(".p-view .color-choose .content").attr("data") == 'true' && $(".color-choose .bg-size .color-item").hasClass("actived") == false) {
        $("#post-success-dialog .modal-title").text("Lỗi");
        $("#post-success-dialog .modal-body").html("<p style='font-size: 15px;'>Chưa chọn màu !</p>");
        $("#post-success-dialog").modal('show');
        $(".express-loading").hide();
        return false;
    }
    if (productid == null || productid.data != undefined) productid = $("#express-buy-dialog >.content").attr("id");
    if ($("#fussed-" + productid).length > 0 && $("#fussed-" + productid).attr("hasfussed") == 'true' && $("#fussed-" + productid + " .item-fussed").hasClass("active") == false) {
        $("#post-success-dialog .modal-title").text("Lỗi");
        $("#post-success-dialog .modal-body").html("<p style='font-size: 15px;'>Chưa chọn kiểu dáng !</p>");
        $("#post-success-dialog").modal('show');
        $(".express-loading").hide();
        return false;
    }
    detectButtonSubmit = $("input[type=submit][clicked=true]");
    if (detectButtonSubmit.length == 0)
        detectButtonSubmit = $("button[type=submit][clicked=true]");
    detectButtonSubmit.attr('disabled', '');
    if ($(detectButtonSubmit).hasClass("add-to-cart")) {

        //$("#add-cart-success-dialog .modal-dialog").bbLoading();
        $("#add-cart-success-dialog").modal('show');

    }
    return true;
}


function AddToCartSuccess(response) {
    if (response.actiontype == undefined || response.actiontype == null)
        return;
    detectButtonSubmit.removeAttr('disabled');
    switch (response.actiontype) {
        case "buy-now":
            window.location.href = response.redirect;
			break;
		case "tragop":
			window.location.href = response.redirect;
			break;
        case "add-to-cart":
            if ($("form#ShoppingCartForm").length > 0) {
                $("form#ShoppingCartForm").submit();
                $("#add-cart-success-dialog").modal('hide');
                $("html, body").animate({
                    scrollTop: 0
                }, 500);

            }
            var scope = angular.element("body").scope()
            scope.$apply(function () {
                scope.shoppingCartCount = scope.shoppingCartCount + response.quantity;
                scope.quantityAdd = response.quantity;
                scope.totalAllCart = scope.totalAllCart + response.price * response.quantity;

            });

            //$("#add-cart-success-dialog .modal-dialog").bbLoading('stop');
            break;
    }
    //var html = "";
    //var total =0;
    //for (var i = 0; i < response.length; i++) {
    //    var itemHtml = "<tr>\
    //                        <td class='img'>\
    //                            <img class='slimmage' src='/Res/Images/Product/{0}?width=50' />\
    //                        </td>\
    //                        <td>{1}</td>\
    //                        <td>{2}</td>\
    //                        <td align='center'>{3}</td>\
    //                        <td align='center'>\
    //                            <span>{4}</span>\
    //                        </td>\
    //                    </tr>".format(
    //                        response[i].URL,
    //                        response[i].Title,
    //                        response[i].RealPrice.formatMoney(0, '.', ','),
    //                        response[i].Quantity,
    //                        response[i].SubTotal.formatMoney(0, '.', ',')
    //                    );
    //    html += itemHtml;
    //    total += response[i].SubTotal
    //}
    //if ($("#content-promotion").length > 0)
    //{
    //    if (total < 99000) {
    //        $("#content-promotion").empty().append("<span><i class='fa fa-hand-o-right'></i> Bạn sẽ được tặng 1 tập học sinh cho đơn hàng từ 99k. Bạn có muốn mua gì nữa không? <a class='btn btn-continue' href='http://bit.ly/tang-qua-nhap-hoc' >Mua thêm</a></span>");
    //    }
    //    if (total >= 99000 && total < 299000) {
    //        $("#content-promotion").empty().append("<span><i class='fa fa-hand-o-right'></i> Bạn sẽ được tặng Tai Nghe S19 có microphone cho đơn hàng từ 299k. Bạn có muốn mua gì nữa không? <a class='btn btn-continue' href='http://bit.ly/tang-qua-nhap-hoc' >Mua thêm</a></span>");
    //    }
    //    if (total >= 299000 && total < 450000) {
    //        $("#content-promotion").empty().append("<span><i class='fa fa-hand-o-right'></i> Bạn sẽ được tặng Loa máy tính RZ-180 cho đơn hàng từ 450k. Bạn có muốn mua gì nữa không? <a class='btn btn-continue' href='http://bit.ly/tang-qua-nhap-hoc' >Mua thêm</a></span>");
    //    }
    //}

    //var html1 = "<tr>\
    //                <td style='border: none;'></td>\
    //                <td style='border: none;'></td>\
    //                <td align='left' colspan='2' style='border: none;'><b>Tiền hàng:</b></td>\
    //                <td align='center' style='border: none;'><span class='red'>" + total.formatMoney(0, '.', ',') + " ₫</span></td>\
    //            </tr>\
    //            <tr>\
    //                <td style='border: none;'></td>\
    //                <td style='border: none;'></td>\
    //                <td align='left' colspan='2'><b>Phí vận chuyển:</b></td><td align='center' >chưa có</td>\
    //            </tr>\
    //            <tr>\
    //                <td style='border: none;'></td>\
    //                <td style='border: none;'></td>\
    //                <td align='left' colspan='2' style='border: none;'><b>TỔNG:</b></td>\
    //                <td align='center' style='border: none;'><span class='red'><b>" + total.formatMoney(0, '.', ',') + " ₫</b></span></td>\
    //            </tr>";


    //$("<table cellpadding='0' cellspacing='0'>\
    //        <thead>\
    //            <tr>\
    //                <th class='img' align='left'>Hình ảnh</th>\
    //                <th align='left'>Tên sản phẩm</th>\
    //                <th align='left'>Giá</th>\
    //                <th align='left' class='quantity'>Số lượng</th>\
    //                <th class='subtotal' align='left'>Thành tiền</th>\
    //            </tr>\
    //        </thead>\
    //        <tbody>{0}</tbody>\
    //</table>".format(html)).prependTo($("#add-cart-success-dialog .lst").empty());
    //$("<table cellpadding='0' cellspacing='0'>\
    //        <tbody>{0}</tbody>\
    //   </table>".format(html1)).prependTo($("#add-cart-success-dialog .lst-total").empty());
    //var scope = angular.element("body").scope();
    //scope.$apply(function () {
    //    scope.shoppingCartCount = response.length;
    //});

    //if ($("form#ShoppingCartForm") != undefined)
    //{
    //      $("form#ShoppingCartForm").submit();
    //}
    //var carta = $(".cart-box-top a.has-count");
    //var reg = /(.*?\()(\d{1,})(\).*?)$/;
    //carta
    //    .attr("href", "/gio-hang.html")
    //        .text(carta.text().replace(reg, "$1" + response.length + "$3"));

    //var fileRef = $("<script></script>")
    //        .attr("src", "/Scripts/frontend/facebook_ad.js")
    //        .appendTo($("head"));

    $("#add-cart-success-dialog .modal-dialog").bbLoading('stop');

}


function RequestInfoBegin(response) {
    $("#request-info-dialog #validateErr").empty();
    $("#request-info-dialog .modal-dialog").bbLoading();

}

function RequestInfoSuccess(response) {
    $("#request-info-dialog .modal-dialog").bbLoading('stop');
    //$(".capcha-name a").trigger("onclick");
    if (response.ContentErr != undefined) {
        $("#request-info-dialog #validateErr").append(response.ContentErr);
    }
    else {

        $("#request-info-dialog").modal('hide');
        $("#post-success-dialog .modal-title").text("Yêu cầu thông báo khi có hàng");
        $("#post-success-dialog .modal-body").text(response.Content);
        $("#post-success-dialog").modal('show');
    }
    grecaptcha.reset(widgetId);
    //$("#request-info-dialog #capchaContain").empty().append(response.GenCapChar);
    //$.ajax({
    //    type: "POST",
    //    contentType: "application/json; charset=utf-8",
    //    url: "/BookBuy/GenCapcha",
    //    dataType: "json",
    //    async: false,
    //    success: function (data, b, c) {
    //        if (data) {

    //            $("#captype").val(data.CapType);
    //            $(".capcha-name").empty()
    //                .append(data.Name);
    //            $("#capvalid").val("")
    //        }
    //    }
    //});

}
var widgetId;
var widgetIdForm;
var widgetIdForm1;
var onloadCallback = function () {
    widgetId = grecaptcha.render(document.getElementById('request-captcha'), {
        'sitekey': '6Lf-weUcAAAAAMbLZg32ldx59eaVbzovA9j63zFO'
    });
    if (document.getElementById('request-captchaform')) {

        widgetIdForm = grecaptcha.render(document.getElementById('request-captchaform'), {
            'sitekey': '6Lf-weUcAAAAAMbLZg32ldx59eaVbzovA9j63zFO'
        });
    }
    if (document.getElementById('request-captchaform1')) {

        widgetIdForm = grecaptcha.render(document.getElementById('request-captchaform1'), {
            'sitekey': '6Lf-weUcAAAAAMbLZg32ldx59eaVbzovA9j63zFO'
        });
    }
};
function RequestInfoMember(productid) {
    $.ajax({
        url: '/BookBuy/RequestInfoForMember',
        type: 'Post',
        async: false,
        data: { ProductID: productid },
        success: function (data) {
            if (data.ContentErr != undefined) {
                $("#request-info-dialog #validateErr").append(data.ContentErr);
            }
            else {
                $("#post-success-dialog .modal-title").text("Yêu cầu thông báo khi có hàng");
                $("#post-success-dialog .modal-body").text(data.Content);
                $("#post-success-dialog").modal('show');
            }
        }
    });
}
function AddToFavBegin(response) {
    $("#post-success-dialog .modal-title").text("Thêm sản phẩm yêu thích");
    $("#post-success-dialog .modal-body").text("");
    $("#post-success-dialog .modal-dialog").bbLoading();
    $("#post-success-dialog").modal('show');
}

function AddToFavSuccess(response) {

    $("#post-success-dialog .modal-dialog").bbLoading('stop');
    $("#post-success-dialog .modal-body").text(response);
}

function goTop() {
    if ($(this).scrollTop() > page_top_limit) {
        $("#toTop").fadeIn()
    } else {
        $("#toTop").fadeOut()
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > page_top_limit) {
            $("#toTop").fadeIn()
        } else {
            $("#toTop").fadeOut()
        }
    });
    $("#toTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false
    })
}
function ParseString(object) {
    if (IsNullOrEmpty(object)) {
        return "";
    }

    return object.toString();
}
function IsNullOrEmpty(object) {
    if (object == null || object.toString().trim() == "null") { return true; }
    else {
        if (object.toString().trim() == "") { return true; }
        else { return false; }
    }
}
///Parse Object to Bool
function ParseBool(object) {
    if (IsNullOrEmpty(object)) {
        return false;
    }
    if (ParseString(object).toLowerCase() == 'true') {
        return true;
    }
    else {
        return false;
    }
}
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();

        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));

        var expires = '; expires=' + date.toGMTString();
    } else {
        expires = '';
    }

    document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/';
}

function readCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');

    for (var i = 0; i < ca.length; i++) {
        var c = decodeURIComponent(ca[i]);

        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }

    return null;
}

function createFlagSession(name) {
    $.get('/BookBuy/SetFlagSession?name=' + name, function (data) {
        return ParseBool(data);
    });
}
function checkproductInCart(cartNumber) {
    var remote = $.ajax({
        type: "GET",
        url: '/BookBuy/CheckProductInCart?cartNumber=' + cartNumber,
        async: false
    }).responseJSON;
    return remote
}
function readFlagSession(name) {

    var remote = $.ajax({
        type: "GET",
        url: '/BookBuy/GetFlagSession?name=' + name,
        async: false
    }).responseText;
    return ParseBool(remote);
}

function getCurrentUser() {

    var remote = $.ajax({
        type: "GET",
        url: '/BookBuy/GetCurrentUser',
        async: false
    }).responseText;
    return parseInt(remote);
}
//This will sort your array
function SortByOrder(a, b) {
    if (a.Order)
        return ((a.Order < b.Order) ? -1 : ((a.Order > b.Order) ? 1 : 0));
}
angular
    .module('bookbuy')
    .controller('shared.ctrl', ['webContentFac', '$scope', '$sce', '$timeout', function (webContentFac, $scope, $sce, $timeout) {
        $scope.bindImage = function (url) {
            if (url != null)
                return pathImageWebContent + url;
            return "";
        }
        $scope.trustAsResourceUrl = function (url) {
            return $sce.trustAsResourceUrl(url);
        }
        $scope.renderHtml = function (html_code) {
            return $sce.trustAsHtml(html_code);
        };
        //first load frontend layout
        webContentFac.getListCategoriesByPages({ Page: "Frontend" }).success(function (data) {
            $scope.loadContentPageByCategories("Frontend", data);
        });
        //end 
        //get shoppingcart count
        webContentFac.getShoppingCartCount().success(function (data) {
            $scope.shoppingCartCount = data.shoppingCartCount;
            $scope.totalAllCart = data.Total;
        });
        //end

        //second load special page
        var page = $("#hdPage").val();
        if (page != "" && page != undefined) {
            webContentFac.getListCategoriesByPages({ Page: page }).success(function (data) {
                $scope.loadContentPageByCategories(page, data);
            });
        }
        //end
        $scope.loadContentPageByCategories = function (Page, categories) {
            for (var i = 0; i < categories.length; i++) {
                webContentFac.getListContents({ Page: Page, Category: categories[i] }).success(function (data) {
                    if (data.length > 0)
                        $scope[Page + '_' + data[0].Category] = data
                    $scope[Page + '_' + data[0].Category] = $scope[Page + '_' + data[0].Category].sort(SortByOrder);
                    for (var j = 0; j < data.length; j++) {
                        $scope[Page + '_' + data[j].Category + '_' + data[j].Name] = data[j];
                    }
                })
            }
        }

    }])

