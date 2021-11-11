<?php session_start(); 

include "./component/listProduct.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include "component/head.php"; ?>

<body class="screen--lg" style="">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php include "component/header.php"; ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                    <div class="row">
                        <div class="span16">
                            <?php 
                            getListProductHtmlwithcategory($_GET["id"],10);  ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="span16 hidden-desktop">
                            <div class="row">
                                <div class="span16 vs-multi-scroller-wrapper home-tabs">
                                    <ul class="clearfix vs-multi-scroller-ul">
                                        <li class="item-0 active">
                                            <a class="tab-0">
                                                <span>Sách Mới &amp; Nổi Bật</span>
                                                <span class="vs-title-toggle cm-combination visible-phone"
                                                    id="sw_sidebox_565">
                                                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="vs-multi-scroller vs-simple-scroller clearfix hidden-tablet hidden-desktop content-tab-0"
                                        style="display: block">
                                        <h4 class="vs-multi-scroller-title clearfix" style="display: none">
                                            <span>Sách Mới &amp; Nổi Bật</span>
                                            <span class="vs-title-toggle cm-combination visible-phone"
                                                id="sw_sidebox_565">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                            </span>
                                        </h4>
                                        <div class="vs-mainbox-body vs-toggle-body clearfix" id="sidebox_565">
                                            <div class="grid-list vs-grid-table-wrapper et-grid-table-wrapper">
                                                <div class="ty-column2">
                                                    <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                                        <form action="#" method="post" name="product_form_565000161782"
                                                            enctype="multipart/form-data"
                                                            class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                            <input type="hidden" name="result_ids"
                                                                value="cart_status*,wish_list*,checkout*,account_info*" />
                                                            <input type="hidden" name="redirect_url"
                                                                value="index.php?sl=vi" />
                                                            <input type="hidden" name="product_data[161782][product_id]"
                                                                value="161782" />
                                                            <div class="vs-grid vs-grid-table et-grid">
                                                                <div class="preview-image">
                                                                    <div
                                                                        class="ty-center scroll-image animate scale come-in">
                                                                        <a
                                                                            href="#nguoi-thay-hoi-uc-cua-mot-nha-giao-my-tai-ban-nam-2021.html">
                                                                            <img class="ty-pict cm-image"
                                                                                src="../layout/image/nguoi-thay-tb-2021.jpg"
                                                                                alt="" title="" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="title-price-wrapper">
                                                                    <bdi>
                                                                        <a href="#nguoi-thay-hoi-uc-cua-mot-nha-giao-my-tai-ban-nam-2021.html"
                                                                            class="product-title"
                                                                            title="Người Thầy - Hồi Ức Của Một Nhà Giáo Mỹ (Tái bản năm 2021)">Người
                                                                            Thầy - Hồi Ức Của Một Nhà Giáo Mỹ
                                                                            (Tái bản năm 2021)</a>
                                                                    </bdi>
                                                                    <div class="clearfix prices-container">
                                                                        <div class="clearfix">
                                                                            <div class="ty-float-left">
                                                                                <span
                                                                                    class="cm-reload-565000161782 ty-price-update"
                                                                                    id="price_update_565000161782">
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price_values]"
                                                                                        value="1" />
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price]"
                                                                                        value="1" />
                                                                                    <span class="ty-price"
                                                                                        id="line_discounted_price_565000161782"><bdi><span
                                                                                                id="sec_discounted_price_565000161782"
                                                                                                class="ty-price-num">118,000</span>&nbsp;<span
                                                                                                class="ty-price-num">đ</span></bdi></span>
                                                                                    <!--price_update_565000161782-->
                                                                                </span>
                                                                            </div>
                                                                            <div class="ty-float-right">
                                                                                <span class="cm-reload-565000161782"
                                                                                    id="old_price_update_565000161782">
                                                                                    <!--old_price_update_565000161782-->
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="rating-buttons clearfix">
                                                                        <div class="ty-float-left vs-rating"></div>
                                                                        <div class="ty-float-right vs-buttons clearfix">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="ty-column2">
                                                    <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                                        <form action="#" method="post" name="product_form_565000161762"
                                                            enctype="multipart/form-data"
                                                            class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                            <input type="hidden" name="result_ids"
                                                                value="cart_status*,wish_list*,checkout*,account_info*" />
                                                            <input type="hidden" name="redirect_url"
                                                                value="index.php?sl=vi" />
                                                            <input type="hidden" name="product_data[161762][product_id]"
                                                                value="161762" />
                                                            <div class="vs-grid vs-grid-table et-grid">
                                                                <div class="preview-image">
                                                                    <div
                                                                        class="ty-center scroll-image animate scale come-in">
                                                                        <a
                                                                            href="#thien-nga-hoang-da-ba-nguoi-con-gai-trung-hoa.html">
                                                                            <img class="ty-pict cm-image"
                                                                                src="../layout/image/thien-nga-hoang-da.jpg"
                                                                                alt="" title="" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="title-price-wrapper">
                                                                    <bdi>
                                                                        <a href="#thien-nga-hoang-da-ba-nguoi-con-gai-trung-hoa.html"
                                                                            class="product-title"
                                                                            title="Thiên Nga Hoang Dã - Ba Người Con Gái Trung Hoa">Thiên
                                                                            Nga Hoang Dã - Ba Người Con Gái
                                                                            Trung Hoa</a>
                                                                    </bdi>
                                                                    <div class="clearfix prices-container">
                                                                        <div class="clearfix">
                                                                            <div class="ty-float-left">
                                                                                <span
                                                                                    class="cm-reload-565000161762 ty-price-update"
                                                                                    id="price_update_565000161762">
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price_values]"
                                                                                        value="1" />
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price]"
                                                                                        value="1" />
                                                                                    <span class="ty-price"
                                                                                        id="line_discounted_price_565000161762"><bdi><span
                                                                                                id="sec_discounted_price_565000161762"
                                                                                                class="ty-price-num">350,000</span>&nbsp;<span
                                                                                                class="ty-price-num">đ</span></bdi></span>
                                                                                    <!--price_update_565000161762-->
                                                                                </span>
                                                                            </div>
                                                                            <div class="ty-float-right">
                                                                                <span class="cm-reload-565000161762"
                                                                                    id="old_price_update_565000161762">
                                                                                    <!--old_price_update_565000161762-->
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="rating-buttons clearfix">
                                                                        <div class="ty-float-left vs-rating"></div>
                                                                        <div class="ty-float-right vs-buttons clearfix">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="ty-column2">
                                                    <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                                        <form action="#" method="post" name="product_form_565000161726"
                                                            enctype="multipart/form-data"
                                                            class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                            <input type="hidden" name="result_ids"
                                                                value="cart_status*,wish_list*,checkout*,account_info*" />
                                                            <input type="hidden" name="redirect_url"
                                                                value="index.php?sl=vi" />
                                                            <input type="hidden" name="product_data[161726][product_id]"
                                                                value="161726" />
                                                            <div class="vs-grid vs-grid-table et-grid">
                                                                <div class="preview-image">
                                                                    <div
                                                                        class="ty-center scroll-image animate scale come-in">
                                                                        <a
                                                                            href="#tu-kien-truc-su-thanh-bac-si-tai-hoa-ky-vi.html">
                                                                            <img class="ty-pict cm-image"
                                                                                src="../layout/image/tu-kien-truc-su-thanh-bac-si-tai-hoa-ky.jpg"
                                                                                alt="" title="" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="title-price-wrapper">
                                                                    <bdi>
                                                                        <a href="#tu-kien-truc-su-thanh-bac-si-tai-hoa-ky-vi.html"
                                                                            class="product-title"
                                                                            title="Từ Kiến Trúc Sư Thành Bác Sĩ Tại Hoa Kỳ">Từ
                                                                            Kiến Trúc Sư Thành Bác Sĩ Tại Hoa
                                                                            Kỳ</a>
                                                                    </bdi>
                                                                    <div class="clearfix prices-container">
                                                                        <div class="clearfix">
                                                                            <div class="ty-float-left">
                                                                                <span
                                                                                    class="cm-reload-565000161726 ty-price-update"
                                                                                    id="price_update_565000161726">
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price_values]"
                                                                                        value="1" />
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price]"
                                                                                        value="1" />
                                                                                    <span class="ty-price"
                                                                                        id="line_discounted_price_565000161726"><bdi><span
                                                                                                id="sec_discounted_price_565000161726"
                                                                                                class="ty-price-num">149,000</span>&nbsp;<span
                                                                                                class="ty-price-num">đ</span></bdi></span>
                                                                                    <!--price_update_565000161726-->
                                                                                </span>
                                                                            </div>
                                                                            <div class="ty-float-right">
                                                                                <span class="cm-reload-565000161726"
                                                                                    id="old_price_update_565000161726">
                                                                                    <!--old_price_update_565000161726-->
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="rating-buttons clearfix">
                                                                        <div class="ty-float-left vs-rating"></div>
                                                                        <div class="ty-float-right vs-buttons clearfix">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="ty-column2">
                                                    <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                                                        <form action="#" method="post" name="product_form_565000161656"
                                                            enctype="multipart/form-data"
                                                            class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                            <input type="hidden" name="result_ids"
                                                                value="cart_status*,wish_list*,checkout*,account_info*" />
                                                            <input type="hidden" name="redirect_url"
                                                                value="index.php?sl=vi" />
                                                            <input type="hidden" name="product_data[161656][product_id]"
                                                                value="161656" />
                                                            <div class="vs-grid vs-grid-table et-grid">
                                                                <div class="preview-image">
                                                                    <div
                                                                        class="ty-center scroll-image animate scale come-in">
                                                                        <a
                                                                            href="#leonardo-da-vinci-cuoc-doi-va-tac-pham-qua-500-hinh-anh.html">
                                                                            <img class="ty-pict cm-image"
                                                                                src="../layout/image/leonardo-da-vinci-cuoc-doi-va-tac-pham-qua-500-hinh-anh.jpg"
                                                                                alt="" title="" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="title-price-wrapper">
                                                                    <bdi>
                                                                        <a href="#leonardo-da-vinci-cuoc-doi-va-tac-pham-qua-500-hinh-anh.html"
                                                                            class="product-title"
                                                                            title="Leonardo Da Vinci - Cuộc Đời Và Tác Phẩm Qua 500 Hình Ảnh">Leonardo
                                                                            Da Vinci - Cuộc Đời Và Tác
                                                                            Phẩm Qua 500 Hình Ảnh</a>
                                                                    </bdi>
                                                                    <div class="clearfix prices-container">
                                                                        <div class="clearfix">
                                                                            <div class="ty-float-left">
                                                                                <span
                                                                                    class="cm-reload-565000161656 ty-price-update"
                                                                                    id="price_update_565000161656">
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price_values]"
                                                                                        value="1" />
                                                                                    <input type="hidden"
                                                                                        name="appearance[show_price]"
                                                                                        value="1" />
                                                                                    <span class="ty-price"
                                                                                        id="line_discounted_price_565000161656"><bdi><span
                                                                                                id="sec_discounted_price_565000161656"
                                                                                                class="ty-price-num">599,000</span>&nbsp;<span
                                                                                                class="ty-price-num">đ</span></bdi></span>
                                                                                    <!--price_update_565000161656-->
                                                                                </span>
                                                                            </div>
                                                                            <div class="ty-float-right">
                                                                                <span class="cm-reload-565000161656"
                                                                                    id="old_price_update_565000161656">
                                                                                    <!--old_price_update_565000161656-->
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="rating-buttons clearfix">
                                                                        <div class="ty-float-left vs-rating"></div>
                                                                        <div class="ty-float-right vs-buttons clearfix">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tygh-footer clearfix" id="tygh_footer">
                <div class="container vs-footer-grid">
                    <div class="row">
                        <div class="span16 footer-menu vs-full-width">
                            <div class="row">
                                <div class="span4">
                                    <div class="vs-footerbox clearfix footer-no-wysiwyg">
                                        <h4 class="vs-footerbox-title clearfix">
                                            <span>Về Chúng Tôi</span>
                                            <span class="vs-title-toggle cm-combination visible-phone visible-tablet"
                                                id="sw_vs_box_17">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                            </span>
                                        </h4>
                                        <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_17">
                                            <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                                                data-ca-live-editor-object-type="">
                                                <ul id="about_cs_cart_links">
                                                    <li class="ty-footer-menu__item">
                                                        <a href="#gioi-thieu-ve-nha-sach.html">Giới Thiệu</a>
                                                    </li>
                                                    <li class="ty-footer-menu__item">
                                                        <a href="#he-thong-nha-sach.html">Hệ Thống</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="vs-footerbox clearfix">
                                        <h4 class="vs-footerbox-title clearfix">
                                            <span>Tài Khoản Của Tôi</span>
                                            <span class="vs-title-toggle cm-combination visible-phone visible-tablet"
                                                id="sw_vs_box_86">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                            </span>
                                        </h4>
                                        <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_86">
                                            <ul id="account_info_links_779">
                                                <li class="ty-footer-menu__item">
                                                    <a href="#auth-loginform/" rel="nofollow">Đăng nhập</a>
                                                </li>
                                                <li class="ty-footer-menu__item">
                                                    <a href="#profiles-add-vi/" rel="nofollow">Tạo tài khoản</a>
                                                </li>
                                                <!--account_info_links_779-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="vs-footerbox clearfix footer-no-wysiwyg">
                                        <h4 class="vs-footerbox-title clearfix">
                                            <span>Hỗ Trợ Khách Hàng</span>
                                            <span class="vs-title-toggle cm-combination visible-phone visible-tablet"
                                                id="sw_vs_box_316">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                            </span>
                                        </h4>
                                        <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_316">
                                            <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                                                data-ca-live-editor-object-type="">
                                                <ul id="about_cs_cart_links">
                                                    <li class="ty-footer-menu__item">
                                                        <a href="#cac-cau-hoi-thuong-gap.html">Các Câu Hỏi Thường
                                                            Gặp</a>
                                                    </li>
                                                </ul>
                                                <li class="ty-footer-menu__item">
                                                    <a href="#quy-dinh-viet-binh-luan.html">Quy Định Viết Bình Luận</a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="vs-footerbox clearfix">
                                        <h4 class="vs-footerbox-title clearfix">
                                            <span>Liên Hệ Với Chúng Tôi</span>
                                            <span class="vs-title-toggle cm-combination visible-phone visible-tablet"
                                                id="sw_vs_box_173">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                            </span>
                                        </h4>
                                        <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_173">
                                            <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                                                data-ca-live-editor-object-type="">
                                                <div class="phone">Hotline: 0000 0000</div>
                                                <div class="email">
                                                    Email: admin@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--tygh_main_container-->
        </div>
        <a href="#" id="scroll-up" class="hidden" style="display: none">
            <i class="et-icon-scroll-up"></i>
        </a>
        <!--tygh_container-->
    </div>

    <script type="text/javascript" id="" src="../layout/js/OneSignalSDK.js"></script>

    <script src="../layout/js/preload-base.js"></script>
    <script nomodule="" src="../layout/js/load.js"></script>
    <script type="module" src="../layout/js/load.esm/index.js"></script>
    <iframe style="display: none"></iframe>
    <script src="../layout/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous" data-no-defer=""></script>
    <script src="../layout/js/jquery-migrate-3.0.1.min.js"
        integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4=" crossorigin="anonymous" data-no-defer="">
    </script>
    <script data-no-defer=""></script>

    <script type="text/javascript"></script>

    <script type="text/javascript" src="../layout/js/flipclock.min.js"></script>
    <script type="text/javascript" src="../layout/js/product_image_gallery.js"></script>
    <script></script>
    <script></script>
    <script type="text/javascript" src="../layout/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="../layout/js/tygh/exceptions.js"></script>
    <script type="text/javascript" src="../layout/js/et-product_image_gallery.js"></script>
    <script src="../layout/js/update.min.js"></script>
    <script src="../layout/js/index.js"></script>
    <div class="hidden" title="undefined" id="undefined"></div>
    <script src="https://cdn-asset.optimonk.com/vendor/swiper.min.js"></script>
</body>

</html>