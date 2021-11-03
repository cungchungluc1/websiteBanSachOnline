
var scroll_time = 500;
var page_top_limit = 100;
var mainSlide = {
    mainSlideMenu: !1,
    onAction: !1,
    slide: !1,
    timer: !1,
    index: 1,
    init: function () {
        mainSlide.initCarousel();
        mainSlide.onResize()
    },
    initCarousel: function () {
        $("#main-slider").owlCarousel({
           
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: !0,
            lazyLoad: true,
            autoHeight: !0,
            afterUpdate: function () {
               // mainSlide.mainSlideMenu.refresh()
            },
            afterInit: function () {
                mainSlide.initSlideMenu()
            },
            afterMove: function () {
                var n = mainSlide.slide.currentItem + 1;
                mainSlide.handleSlide(n)
            }
        });
        $(".main-slider .owl-prev,.main-slider .owl-next").empty();
        mainSlide.slide = $("#main-slider").data("owlCarousel")
    },
    initSlideMenu: function () {
        //mainSlide.mainSlideMenu = new IScroll("#mainSlideList", {
        //    scrollbars: !0,
        //    mouseWheel: !0,
        //    interactiveScrollbars: !1,
        //    shrinkScrollbars: "clip",
        //    fadeScrollbars: !0,
        //    click: !0
        //});
        $("#main-slide-list>li:first-child").addClass("active");
        $("#main-slide-list>li").click(function (n) {
            n.preventDefault();
            $("#main-slide-list>li").removeClass("active");
            $(this).addClass("active");
            mainSlide.slide.goTo($(this).attr("data-index") - 1);
            mainSlide.index = $(this).attr("data-index")
        });
        mainSlide.autoPlay();
        $("html.desktop .main-slider").hover(function () {
            mainSlide.onAction = !0;
            clearInterval(mainSlide.timer)
        }, function () {
            mainSlide.onAction = !1;
            mainSlide.autoPlay()
        })
    },
    autoPlay: function () {
        mainSlide.timer = setInterval(function () {
            mainSlide.onAction || (mainSlide.handleSlide(mainSlide.index), mainSlide.slide.goTo(mainSlide.index - 1), mainSlide.index++);
            mainSlide.index > $("#main-slide-list>li").length && (mainSlide.index = 1)
        }, 3e3)
    },
    handleSlide: function (n) {
        $("#main-slide-list>li").removeClass("active");
        $('#main-slide-list>li[data-index="' + n + '"]').addClass("active");
      //  mainSlide.mainSlideMenu.scrollToElement(document.querySelector('#scroller #main-slide-list li[data-index="' + n + '"]'), null, null, !0);
        mainSlide.index = n
    },
    onResize: function () {
        $(window).bind("resize", function () { })
    }
}

$(function () {
    mainSlide.init();
    $(".center-banners .owl-carousel").owlCarousel({

        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay:true,
        singleItem: !0,
        lazyLoad: true,
        autoHeight: !0
    });
    //if ($(this).scrollTop() > page_top_limit) {
    //    $(".popout").fadeIn()
    //} else {
    //    $(".popout").fadeOut()
    //}
    //$(window).scroll(function () {
    //    if ($(this).scrollTop() > page_top_limit) {
    //        $(".popout").fadeIn()
    //    } else {
    //        $(".popout").fadeOut()
    //    }
    //});
    //Add by mongvd 9/7/2015
    //Them class active tren header
    $(".home-nav").addClass("active");
    //end
    $(".banner-slides .r .promote2").hover(function () {
        $("ul.level3", $(this)).show();
    }, function () {
        $("ul.level3", $(this)).hide();
    });

    //$(".control-gallery .pause").click(function () {
    //    $(".week-book .slide-hol").tinycarousel_stop();
    //    return false;
    //});
    //$(".control-gallery .play").click(function () {
    //    $(".week-book .slide-hol").tinycarousel_start();
    //    return false;
    //}); 
	$(".menu-box").show(); 
	//$(".menu-trigger a.thumb").removeClass('none-bottom-bd');
    $(".main-menu .menu-trigger").on({
        "mouseleave": function () {
            $(".menu-box").show();
        }
    });
    
    $(".navbar-collapse ul li").removeClass("active");
  
    
});



angular
    .module('bookbuy')
    .controller('home.ctrl', ['$scope', 'albumFac', 'bannerFac', 'productFac', function ($scope, albumFac, bannerFac, productFac) {
        $scope.productPath = '//bookbuy.vn/Res/Images/Product/';
     //   $scope.albumPath = '//bookbuy.vn/Res/Images/Album/';
        //$scope.bannerPath = '//bookbuy.vn/Res/Images/Banner/';
        $scope.topSlides = [];
        $scope.bookType = 'new';
        $scope.stationeryType = 'new';
        $scope.giftType = 'new';
        $scope.homeappType = 'new';
        $scope.fashionType = 'new';
        $scope.techType = 'new';
        $scope.skldType = 'new';

        //$(".banner-slides .l").bbLoading();
        //albumFac.albumDetailByID(25).success(function (data) {
        //    $scope.topSlides = data;
            
        //    setTimeout(function () {
        //        mainSlide.init();
        //        $(".banner-slides .l").bbLoading('stop');
        //    }, 50)
        //})
        //if (!ParseBool($("#IsMobile").val())) {

        //    bannerFac.bannersForHP().success(function (data) {
        //        $scope.banners = data;
        //        $scope.topBanners = $.grep($scope.banners, function (n, i) {
        //            return n.BannerGroupID == 1;
        //        })

        //        $scope.stationeryBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 34;
        //        })
        //        $scope.giftBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 35;
        //        })
        //        $scope.homeappBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 36;
        //        })
        //        $scope.fashionBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 24;
        //        })
        //        $scope.techBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 37;
        //        })
        //        $scope.skldBanners = $.grep($scope.banners, function (n, i) {
        //            return n.ID == 181;
        //        })
        //    })
        //}
        //albumFac.albumDetailByID(26).success(function (data) {
        //    $scope.centerBanners = data;
        //})


        productFac.bookTopicsHomePage().success(function (data) {
            $scope.topics = data;
        })
        setTimeout(function () {
            $(".week-book .week-book1").bbLoading();
            productFac.productNewByMainCat(1, 1, 20).success(function (data) {
             
				if (window.outerWidth < 768) {
					$scope.books = $scope.chunkArr(data, 4, 2);
					$scope.newBooks = $scope.chunkArr(data, 4, 2);;
				}
				else {
					$scope.books = data;
					$scope.newBooks = data;
				}
                //setTimeout(function () { weekbookSlide.init(); $(".week-book .week-book1").bbLoading('stop'); }, 500)
                $(".week-book .week-book1").bbLoading('stop');
            })
            $(".stationery-content .slide-hol-new").bbLoading();
			productFac.productByVCat(11, 1, 36).success(function (data) {
				$scope.stationeries = $scope.chunkArr(data, 6, 3);
				$scope.newStationeries = $scope.chunkArr(data, 6, 3);
                $(".stationery-content .slide-hol-new").bbLoading('stop');
            })


            $(".gift-content .slide-hol-new").bbLoading();
            productFac.productByVCat(176, 1, 36).success(function (data) {
				$scope.gifts = $scope.chunkArr(data, 6, 3);
                $scope.newGifts = data;
                $(".gift-content .slide-hol-new").bbLoading('stop');
            })

            $(".homeapp-content .slide-hol-new").bbLoading();
            productFac.productByVCat(158, 1, 36).success(function (data) {
				$scope.homeapps = $scope.chunkArr(data, 6, 3);
                $scope.newHomeapps = data;
                $(".homeapp-content .slide-hol-new").bbLoading('stop');
            })
                //$(".fashion-content .slide-hol-new").bbLoading();
                //productFac.productByVCat(153, 1, 15).success(function (data) {
                //    $scope.fashions = data;
                //    $scope.newFashions = data;
                //    $(".fashion-content .slide-hol-new").bbLoading('stop');
                //})
            
            $(".tech-content .slide-hol-new").bbLoading();
            productFac.productNewByMainCat(457).success(function (data) {
				$scope.techs = $scope.chunkArr(data, 6, 3);
                $scope.newTechs = data;
                $(".tech-content .slide-hol-new").bbLoading('stop');
            })
                $(".skld-content .slide-hol-new").bbLoading();
                productFac.productByVCat(207,1,36).success(function (data) {
					$scope.sklds = $scope.chunkArr(data, 6, 3);
                    $scope.newsklds = data;
                    $(".skld-content .slide-hol-new").bbLoading('stop');
                })
            
        }, 200);
        $scope.changeBookType = function (type) {
            if (type != $scope.bookType) {
                $(".week-book .week-book1").bbLoading();
                $scope.bookType = type;
                switch (type) {
                    case 'new':
                        $scope.bookViewmoreLink = "/sach-moi/p1";
						if ($scope.newBooks) {
							if (window.outerWidth < 768) {
								$scope.books = $scope.chunkArr(newBooks, 4, 2);
							}
							else {
								$scope.books = $scope.newBooks;
							}
                            
                            //  $(".week-book .week-book1").bbLoading('stop');
                            //setTimeout(function () {
                            //    weekbookSlide.init();
                            //    $(".week-book .week-book1").bbLoading('stop');
                            //}, 50)
                            $(".week-book .week-book1").bbLoading('stop');
                        }
                        else {
                            productFac.productNewByMainCat(1).success(function (data) {
                              
								if (window.outerWidth < 768) {
									$scope.books = $scope.chunkArr(data, 4,2); 
									$scope.newBooks = $scope.chunkArr(data, 4, 2);
								}
								else {
									$scope.books = data;
									$scope.newBooks = data;
								}
                              //  $(".week-book .week-book1").bbLoading('stop');
                                //setTimeout(function () {
                                //    weekbookSlide.init();
                                //    $(".week-book .week-book1").bbLoading('stop');
                                //}, 100)
                                $(".week-book .week-book1").bbLoading('stop');
                            })
                        }
                        break;
                    case 'discount':
                        $scope.bookViewmoreLink = "/sach-giam-gia/p1";
                        if ($scope.discountBooks) {
							
							if (window.outerWidth < 768) {
								$scope.books = $scope.chunkArr($scope.discountBooks, 4, 2); 
							}
							else {
								$scope.books = $scope.discountBooks;
							}
                          //  $(".week-book .week-book1").bbLoading('stop');
                            //setTimeout(function () {
                            //    weekbookSlide.init();
                            //    $(".week-book .week-book1").bbLoading('stop');
                            //}, 50)
                            $(".week-book .week-book1").bbLoading('stop');
                        }
                        else {
                            productFac.productDiscountByMainCat(1).success(function (data) {
                               
								if (window.outerWidth < 768) {
									$scope.books = $scope.chunkArr(data, 4, 2); 
									$scope.discountBooks = $scope.chunkArr(data, 4, 2);
								}
								else {
									$scope.books = data;
									$scope.discountBooks = data;
								}
                               // $(".week-book .week-book1").bbLoading('stop');
                                //setTimeout(function () {
                                //    weekbookSlide.init();
                                //    $(".week-book .week-book1").bbLoading('stop');
                                //}, 100)
                                $(".week-book .week-book1").bbLoading('stop');
                            })
                        }
                        break;
                    case 'commingsoon':
                        $scope.bookViewmoreLink = "/sach-sap-phat-hanh/p1";
                        if ($scope.commingsoonBook) {
							$scope.books = $scope.commingsoonBook;

							if (window.outerWidth < 768) {
								$scope.books = $scope.chunkArr($scope.commingsoonBook, 4, 2); 
							}
							else {
								$scope.books = $scope.commingsoonBook; 
							}
                           // $(".week-book .week-book1").bbLoading('stop');
                            //setTimeout(function () {
                            //    weekbookSlide.init();
                            //    $(".week-book .week-book1").bbLoading('stop');
                            //}, 50)
                            $(".week-book .week-book1").bbLoading('stop');
                        }
                        else {
                            productFac.productCommingByMainCat(1, 1, 20).success(function (data) {
                                
								if (window.outerWidth < 768) {
									$scope.books = $scope.chunkArr(data, 4, 2);
									$scope.commingsoonBook = $scope.chunkArr($scope.data, 4, 2);
								}
								else {
									$scope.books = data;
									$scope.commingsoonBook = data;
								}
                             //   $(".week-book .week-book1").bbLoading('stop');
                                //setTimeout(function () {
                                //    weekbookSlide.init();
                                //    $(".week-book .week-book1").bbLoading('stop');
                                //}, 100)
                                $(".week-book .week-book1").bbLoading('stop');
                            })
                        }
                        break;
                    case 'mostbuy':
                        $scope.bookViewmoreLink = "/sach-ban-chay/p1";
                        if ($scope.mostbuyBooks) { 
							if (window.outerWidth < 768) {
								$scope.books = $scope.chunkArr($scope.mostbuyBooks, 4, 2);
							}
							else {
								$scope.books = $scope.mostbuyBooks;
							}
                           // $(".week-book .week-book1").bbLoading('stop');
                            //setTimeout(function () {
                            //    weekbookSlide.init();
                            //    $(".week-book .week-book1").bbLoading('stop');
                            //}, 50)
                            $(".week-book .week-book1").bbLoading('stop');

                        }
                        else {
                            productFac.productMostBuyByMainCat(1, 1, 20).success(function (data) {
                               

								if (window.outerWidth < 768) { 
									$scope.books = $scope.chunkArr(data, 4, 2);
									$scope.mostbuyBooks = data;
								}
								else {
									$scope.books = data;
									$scope.mostbuyBooks = data;
								}
                                //setTimeout(function () {
                                //    weekbookSlide.init();
                                //    $(".week-book .week-book1").bbLoading('stop');
                                //}, 100)
                                $(".week-book .week-book1").bbLoading('stop');
                            })
                        }
                        break;
                }
            }
        }
        
        $scope.changeProducts = function (maincat, type, vcat, evt) {
            if ($(evt.currentTarget).hasClass('current')) return;

            switch (maincat) {
                case 7:
                    $(".stationery-content .slide-hol-new").bbLoading();
                    break;
                case 6:
                    $(".gift-content .slide-hol-new").bbLoading();
                    break;
                case 8:
                    $(".homeapp-content .slide-hol-new").bbLoading();
                    break;
                case 740:
                    $(".fashion-content .slide-hol-new").bbLoading();
                    break;
                case 457:
                    $(".tech-content .slide-hol-new").bbLoading();
                    break;
                case 2896:
                    $(".skld-content .slide-hol-new").bbLoading();
                    break;
            }
            if (vcat != -1) {
                //productFac.productNewByMainCat(maincat).success(function (data) {
                //    switch (maincat) {
                //        case 7:
                //            $scope.stationeries = data;
                //            $scope.stationeryType = type;
                //            switch (type) {
                //                case 'new':
                //                    $scope.stationeryViewmoreLink = "/van-phong-pham-moi/p1";
                //                    $scope.newStationeries = data;
                //                    break;
                //            }
                //            break;
                //        case 6:
                //            $scope.gifts = data;
                //            $scope.giftType = type;
                //            switch (type) {
                //                case 'new':
                //                    $scope.giftViewmoreLink = "/qua-tang-moi/p1";
                //                    $scope.newGifts = data;
                //                    break;
                //            }
                //            break;
                //        case 8:
                //            $scope.homeappType = type;
                //            $scope.homeapps = data;
                //            switch (type) {
                //                case 'new':
                //                    $scope.homeappViewmoreLink = "/vat-dung-gia-dinh-moi/p1";
                //                    $scope.newHomeapps = data;
                //                    break;
                //            }
                //            break;
                //        case 740:
                //            $scope.fashionType = type;
                //            $scope.fashions = data;
                //            switch (type) {
                //                case 'new':
                //                    $scope.fashionViewmoreLink = "/thoi-trang-moi/p1";
                //                    $scope.newFashions = data;
                //                    break;
                //            }
                //            break;
                //        case 457:
                //            $scope.techType = type;
                //            $scope.techs = data;
                //            switch (type) {
                //                case 'new':
                //                    $scope.techViewmoreLink = "/san-pham-cong-nghe-moi/p1";
                //                    $scope.newTechs = data;
                //                    break;
                //            }
                //            break;
                //        case 2896:
                //            $scope.skldType = type;
                //            $scope.sklds = data;
                //            switch (type) {
                //                case 'new':
                //                    $scope.skldViewmoreLink = "/suc-khoe-lam-dep-moi/p1";
                //                    $scope.newsklds = data;
                //                    break;
                //            }
                //            break;
                //    }
                //});
                productFac.productByVCat(vcat).success(function (data) {
                    switch (maincat) {
						case 7:
							//$scope.stationeries = [];
							  
							$scope.stationeries = $scope.chunkArr(data, 6, 3);
                            $scope.stationeryType = type;
                            switch (type) {
                                case 'stationery':
                                    $scope.stationeryViewmoreLink = "/van-phong-pham.html";
									//$scope.staStationeries = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'note':
                                    $scope.stationeryViewmoreLink = "/van-phong-pham/So-tay/ct117/p1";
									//$scope.noteStationeries = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'tool':
                                    $scope.stationeryViewmoreLink = "/van-phong-pham/Hoc-cu/ct106/p1";
									//$scope.toolStationeries = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'dungcuve':
                                    $scope.stationeryViewmoreLink = "/pc?ct=486&tt=dung-cu-ve-my-thuat";
									//$scope.staStationeries = $scope.chunkArr(data, 6, 3);
                                    break;
                            }
                            break;
                        case 6:
							$scope.gifts = $scope.chunkArr(data, 6, 3);
                            $scope.giftType = type;
                            switch (type) {
                                case 'gift':
                                    $scope.giftViewmoreLink = "/qua-tang.html";
									$scope.giGifts = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'souvenir':
                                    $scope.giftViewmoreLink = "/qua-tang/qua-luu-niem/ct387/p1";
									$scope.souvenirGifts = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'toy':
                                    $scope.giftViewmoreLink = "/qua-tang/do-choi/ct398/p1";
									$scope.toyGifts = $scope.chunkArr(data, 6, 3);
                                    break;
                            }
                            break;

                        case 8:
                            $scope.homeappType = type;
							$scope.homeapps = $scope.chunkArr(data, 6, 3);
                            switch (type) {                               
                                case 'utility':
                                    $scope.homeappViewmoreLink = "/vat-dung-gia-dinh/vat-dung-tien-ich/ct682/p1";
									$scope.utilityHomeapps = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'personal':
                                    $scope.homeappViewmoreLink = "/vat-dung-gia-dinh/do-dung-ca-nhan/ct536/p1";
									$scope.personalHomeapps = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'electric':
                                    $scope.homeappViewmoreLink = "/vat-dung-gia-dinh/dien-gia-dung/ct719/p1";
									$scope.electricHpmeapps = $scope.chunkArr(data, 6, 3);
                                    break;
                            }
                            break;

                        //case 740:
                        //    $scope.fashionType = type;
                        //    $scope.fashions = data;
                        //    switch (type) {                               
                        //        case 'men':
                        //            $scope.fashionViewmoreLink = "/thoi-trang/trang-phuc-nam/ct741/p1";
                        //            $scope.menFashions = data;
                        //            break;
                        //        case 'women':
                        //            $scope.fashionViewmoreLink = "/thoi-trang/trang-phuc-nu/ct742/p1";
                        //            $scope.womenFashions = data;
                        //            break;
                        //        case 'child':
                        //            $scope.fashionViewmoreLink = "/thoi-trang/thoi-trang-tre-em/ct743/p1";
                        //            $scope.chuldFashions = data;
                        //            break;
                        //        case 'accessory':
                        //            $scope.fashionViewmoreLink = "/thoi-trang/phu-kien/ct747/p1";
                        //            $scope.accessoryFashions = data;
                        //            break;
                        //    }
                        //    break;

                        case 457:
                            $scope.techType = type;
							$scope.techs = $scope.chunkArr(data, 6, 3);
                            switch (type) {                              
                                case 'wacom':
                                    $scope.techViewmoreLink = "/cong-nghe/wacom/ct497/p1";
									$scope.wacomTechs = $scope.chunkArr(data, 6, 3);;
                                    break;
                                case 'accessory':
                                    $scope.techViewmoreLink = "/cong-nghe/phu-kien/ct464/p1";
									$scope.accessoryTechs = $scope.chunkArr(data, 6, 3);
                                    break;
                            }
                            break;
                        case 2896:
                            $scope.skldType = type;
							$scope.sklds = $scope.chunkArr(data, 6, 3);
                            switch (type) {
                                case 'mypham':
                                    $scope.skldViewmoreLink = "/suc-khoe-lam-dep/my-pham/ct663/p1";
									$scope.myphamsklds = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'nuochoa':
                                    $scope.skldViewmoreLink = "/suc-khoe-lam-dep/nuoc-hoa/ct2928/p1";
									$scope.nuochoasklds = $scope.chunkArr(data, 6, 3);
                                    break;
                                case 'thucduong':
                                    $scope.skldViewmoreLink = "/suc-khoe-lam-dep/thuc-duong/ct2900/p1";
									$scope.thucduongsklds = $scope.chunkArr(data, 6, 3);
                                    break;
                            }
                            break;

                    }

                    switch (maincat) {
                        case 7:
                            $(".stationery-content .slide-hol-new").bbLoading('stop');
                            break;
                        case 6:
                            $(".gift-content .slide-hol-new").bbLoading('stop');
                            break;
                        case 8:
                            $(".homeapp-content .slide-hol-new").bbLoading('stop');
                            break;
                        case 740:
                            $(".fashion-content .slide-hol-new").bbLoading('stop');
                            break;
                        case 457:
                            $(".tech-content .slide-hol-new").bbLoading('stop');
                            break;
                        case 2896:
                            $(".skld-content .slide-hol-new").bbLoading('stop');
                            break;
                    }
                })
            }
            else if (type == 'new') {
                switch (maincat)
                {
                    case 457:
                        productFac.productNewByMainCat(457).success(function (data) {
                            $scope.techType = type;
							$scope.techs = $scope.chunkArr(data, 6, 3);
							$scope.newTechs = $scope.chunkArr(data, 6, 3);
                            $(".tech-content .slide-hol-new").bbLoading('stop');
                        })
                        break;
                    case 2896:
                        productFac.productNewByMainCat(2896).success(function (data) {
                            $scope.skldType = type;
							$scope.sklds = $scope.chunkArr(data, 6, 3);
							$scope.newsklds = $scope.chunkArr(data, 6, 3);
                            $(".skld-content .slide-hol-new").bbLoading('stop');
                        })
                        break;
                    default:
                        break;
                }
              
            }
		}
		$scope.chunkArr = function ($array, size, size2) {
			if ($array == undefined)
				return [];
			var chunked_arr = { guid: uuidv4(), data: [] };
			var index = 0;
			while (index < $array.length) {
				var temp = $array.slice(index, size + index); 
				
				if (size2) {
					chunked_arr.data.push($scope.chunkArr(temp, size2));
				}
				else {
					chunked_arr.data.push(temp);
				}
				index += size;
			}
			return chunked_arr;
		}
        
		function uuidv4() {
			return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
				var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
				return v.toString(16);
			});
		}
    }])