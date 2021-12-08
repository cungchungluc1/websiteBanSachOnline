<?php session_start(); 
include_once "../entity/product.php";
// include '../entity/category.php';
$pro  = new Product();
// $c  = new category();
// $list = $c->getallcategory();
$dataaproduct = $pro->getaproduct($_GET['id']);
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include_once "component/head.php"; ?>

<body class="screen--lg">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php include_once "component/header.php"; ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                    <div class="row">
                        <div class="span16">
                            <div class="hidden-phone">
                                <div id="breadcrumbs_10">
                                    <div class="ty-breadcrumbs clearfix">
                                        <a alt="" class="ty-breadcrumbs__a">Trang chủ</a><i
                                            class="vs-icon-arrow-right"></i><a alt=""
                                            class="ty-breadcrumbs__a">Product</a><i
                                            class="vs-icon-arrow-right"></i><span
                                            class="ty-breadcrumbs__current"><bdi><?php echo htmlentities($dataaproduct->name); ?></bdi></span>
                                    </div>
                                    <!--breadcrumbs_10-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span16 et-content">
                            <div class="row">
                                <div class="span16">
                                    <!-- Inline script moved to the bottom of the page -->
                                    <div
                                        class="product-main-info vs-product-main-info-responsive ty-product-block ty-product-detail et-product-main-info">
                                        <div class="clearfix">
                                            <form action="../controller/addCart.php" method="post"
                                                name="product_form_161920" enctype="multipart/form-data"
                                                class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                <input type="hidden" name="id_product"
                                                    value="<?php echo htmlentities($dataaproduct->id_product); ?>" />

                                                <div class="image-wrap ty-float-left clreafix et-image-wrapper">
                                                    <div class="image-border ty-center cm-reload-161920"
                                                        data-ca-previewer="true" id="product_images_161920_update">
                                                        <div class="clearfix">
                                                            <style>
                                                            .et-big-image-wrapper {
                                                                width: 502px;
                                                            }
                                                            </style>
                                                            <div class="et-big-image-wrapper">
                                                                <div class="ty-product-img cm-preview-wrapper owl-carousel owl-theme stopped"
                                                                    style="opacity: 1; display: block">
                                                                    <div class="owl-wrapper-outer">
                                                                        <div class="owl-wrapper" style="
                                              width: 1004px;
                                              left: 0px;
                                              display: block;
                                            ">
                                                                            <div class="owl-item active"
                                                                                style="width: 502px">
                                                                                <span
                                                                                    class="ty-image-zoom__wrapper easyzoom easyzoom--adjacent"><a
                                                                                        id="det_img_link_1619206182bad99ac91_221631"
                                                                                        data-ca-image-id="preview[product_images_1619206182bad99ac91]"
                                                                                        class="cm-image-previewer cm-previewer ty-previewer"
                                                                                        data-ca-image-width="600"
                                                                                        data-ca-image-height="600"
                                                                                        alt="" title=""><img
                                                                                            class="ty-pict cm-image"
                                                                                            id="det_img_1619206182bad99ac91_221631"
                                                                                            src="<?php echo "../layout/".htmlentities($dataaproduct->url); ?>"
                                                                                            style="height: 500px;
                                                      max-width: 500px;
                                                      width: auto;" data-src="" alt="" title="" /><svg
                                                                                            class="ty-pict__container"
                                                                                            aria-hidden="true"
                                                                                            width="500" height="500"
                                                                                            viewBox="0 0 500 500" style="
                                                      max-height: 100%;
                                                      max-width: 100%;
                                                      position: absolute;
                                                      top: 0;
                                                      left: 50%;
                                                      transform: translateX(-50%);
                                                      z-index: -1;
                                                    ">
                                                                                            <rect fill="transparent"
                                                                                                width="500"
                                                                                                height="500"></rect>
                                                                                        </svg>
                                                                                        <span
                                                                                            class="ty-previewer__icon hidden-phone"></span></a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="et-title clearfix">
                                                        <h1 class="ty-mainbox-title">
                                                            <bdi><?php echo htmlentities($dataaproduct->name); ?></bdi>
                                                        </h1>
                                                    </div>
                                                    <div
                                                        class="prices-container price-wrap clearfix product-detail-price et-price">
                                                        <div class="product-prices clearfix">
                                                            <div class="actual-price">
                                                                <span class="cm-reload-161920 ty-price-update"
                                                                    id="price_update_161920">
                                                                    <span class="ty-price"
                                                                        id="line_discounted_price_161920"><bdi><span
                                                                                id="sec_discounted_price_161920"
                                                                                class="ty-price-num"><?php echo htmlentities($dataaproduct->price); ?></span>&nbsp;<span
                                                                                class="ty-price-num">đ</span></bdi></span>
                                                                    <!--price_update_161920--></span>
                                                                <br />
                                                            </div>
                                                            <div class="et-old-price">
                                                                <span class="cm-reload-161920"
                                                                    id="old_price_update_161920">
                                                                    <!--old_price_update_161920--></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-note indented et-short-descr-wrapper">
                                                        <div class="note-descr">
                                                            <div class="et-short-descr-title">
                                                                Mô tả ngắn:
                                                            </div>
                                                            <div>
                                                                <?php echo htmlentities($dataaproduct->description); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="et-info-wrapper clearfix">
                                                        <div class="advanced-options-wrapper clearfix">
                                                            <div class="cm-reload-161920"
                                                                id="advanced_options_update_161920">
                                                                <div class="ty-control-group product-list-field">
                                                                    <label class="ty-control-group__label">Nhà xuất
                                                                        bản:</label>
                                                                    <?php include_once "../entity/publishingCompany.php";
                                        $pc1 = new publishingCompany();
                                        $detalPc = $pc1->getapublishingCompany($dataaproduct->id_publishing_company);  ?>
                                                                    <span
                                                                        class="ty-control-group__item ty-company-name"><a
                                                                            alt=""><?php if($detalPc!=null) echo htmlentities($detalPc->name); ?></a></span>
                                                                </div>
                                                                <!--advanced_options_update_161920-->
                                                            </div>
                                                        </div>
                                                        <div class="vs-stock">
                                                            <div class="cm-reload-161920 stock-wrap"
                                                                id="product_amount_update_161920">

                                                                <div class="ty-control-group product-list-field">
                                                                    <label class="ty-control-group__label">Còn
                                                                        hàng:</label>
                                                                    <span id="qty_in_stock_161920"
                                                                        class="ty-qty-in-stock ty-control-group__item">
                                                                        <?php echo htmlentities($dataaproduct->quantity); ?>&nbsp;sản
                                                                        phẩm
                                                                    </span>
                                                                </div>
                                                                <!--product_amount_update_161920-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-fields-wrapper indented et-qty-wrapper">
                                                        <div class="product-fields-group">
                                                            <div class="cm-reload-161920" id="qty_update_161920">

                                                                <div class="ty-qty et-qty clearfix changer"
                                                                    id="qty_161920">
                                                                    <label class="ty-control-group__label"
                                                                        for="qty_count_161920">Số lượng:</label>
                                                                    <div
                                                                        class="ty-center ty-value-changer cm-value-changer">
                                                                        <a class="cm-increase ty-value-changer__increase"
                                                                            id="asc">+</a>
                                                                        <input type="number" size="5"
                                                                            class="ty-value-changer__input cm-amount"
                                                                            id="quantity" name="product_quantity"
                                                                            value="1" min="1" max="<?php echo htmlentities($dataaproduct->quantity); ?>" />
                                                                        <a class="cm-decrease ty-value-changer__decrease"
                                                                            id="desc">−</a>
                                                                        <script>
                                                                        $("#asc").on('click', function() {
                                                                            let max = Number( <?php echo htmlentities($dataaproduct->quantity); ?> );
                                                                            let a = 0;
                                                                            a += Number($("#quantity").val()) +
                                                                                1;
                                                                            if (a > max) {
                                                                                a = max;
                                                                                alert("Đã nhập vượt quá số lượng sản phẩm ");
                                                                            }
                                                                            $("#quantity").val(a);
                                                                            
                                                                        });
                                                                        
                                                                        $("#desc").on('click', function() {
                                                                            let a = 0;
                                                                            a = Number($("#quantity").val()) -
                                                                                1;
                                                                            if (a < 1) a = 1;
                                                                            $("#quantity").val(a);
                                                                        });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                                <!--qty_update_161920-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buttons-container et-button-container clearfix">
                                                        <div class="cm-reload-161920" id="add_to_cart_update_161920">

                                                            <div class="buttons-container clearfix"
                                                                id="cart_add_block_161920">
                                                                <button
                                                                    class="ty-btn et-icon-atc cm-submit text-button vs-text-w-icon"
                                                                    id="button_cart_161920"
                                                                    name="dispatch[checkout.add..161920]">
                                                                    <i class="et-icon-cart"></i>CHỌN MUA
                                                                </button>
                                                            </div>
                                                            <div class="add-buttons-wrap no-margin">
                                                                <div class="add-buttons-inner-wrap clearfix">
                                                                    <div id="cart_buttons_block_161920"
                                                                        class="add-buttons add-to-wish clearfix">
                                                                        <a class="cm-tooltip vs-button vs-add-to-wishlist cm-submit red"
                                                                            id="button_wishlist_161920"
                                                                            title="Thêm vào danh sách yêu thích" <?php 
                                                                            include_once "../entity/like.php";
                                                                            if(!session_id())
                                                                              session_start();
                                                                            include_once "../entity/user.php";
                                                                            $status = null;
                                                                            if(isset($_SESSION["codeSession"])){
                                                                              $id_code=$_SESSION["codeSession"];
                                                                              $use = new User();
                                                                              $data = $use->checkLogin($id_code);
                                                                              if($data == null){
                                                                                
                                                                              }
                                                                              else{
                                                                                $l = new like();
                                                                                $l->id_user=$data->id_user;
                                                                                $l->id_product=$dataaproduct->id_product;
                                                                                if($l->getalike($l)!=null){
                                                                                  $status = 1;
                                                                                  
                                                                                }else{
                                                                                  
                                                                                }
                                                                                echo 'href="../controller/updatelike.php?id_user='.$data->id_user.'&id_product='.$dataaproduct->id_product.'"';
                                                                              }
                                                                            } 
                                                                            ?>>
                                                                            <?php
                                                                          if($status == null){
                                                                            echo '<i class="fas fa-heart" style=""></i>';
                                                                          }else echo '<i class="fas fa-heart" style="color: red !important;"></i>';
                                                                          ?>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--add_to_cart_update_161920-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Inline script moved to the bottom of the page -->
                                        <div class="ty-tabs cm-j-tabs clearfix">
                                            <ul class="ty-tabs__list">
                                                <li id="description" class="ty-tabs__item cm-js active">
                                                    <a class="ty-tabs__a">Mô tả sản phẩm</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cm-tabs-content ty-tabs__content clearfix" id="tabs_content">
                                            <div id="content_description"
                                                class="ty-wysiwyg-content content-description">
                                                <?php echo $dataaproduct->description_detail; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "component/footer.php"; ?>
            <!--tygh_main_container-->
        </div>
        <a alt="" id="scroll-up" class="hidden" style="display: none">
            <i class="et-icon-scroll-up"></i>
        </a>
        <!--tygh_container-->
    </div>

    <script type="text/javascript" id="" src="../layout/js/OneSignalSDK.js"></script>

    <script src="../layout/js/preload-base.js"></script>
    <script nomodule="" src="../layout/js/load.js"></script>
    <script type="module" src="../layout/js/load.esm/index.js"></script>

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