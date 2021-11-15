<?php

function getListProductHtmlwithcategory($id, $limit){
    include "../entity/product.php";
    $cate  = new Product();
    $i = -1;
    $list = $cate->getallproductwithcategory($id);
    $cates  = new Category();
    $itemCate = $cates->getacategory($id);
    echo '<div class="row">
    <div class="span16">
        <div class="row">
            <div class="span16">
                <div class="hidden-phone">
                    <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                        data-ca-live-editor-object-type="">
                        <div class="vs-mainbox-general clearfix">
                            <h1 class="vs-mainbox-title clearfix">
                                <span>
                                    <a href="'."./category.php?id=".htmlentities($itemCate->id_category).'">
                                        <span>'.htmlentities($itemCate->name).'</span>
                                    </a>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 space-bottom">
                <div class="row">
                    <div class="span8 space-bottom">
                        <div class="center ty-banner__image-wrapper">
                            <a href="#chu-be-that-son.html" target="_blank">
                                <img class="ty-pict cm-image" id="det_img_1977620607"
                                    src="../layout/image/d42e2dfa-6a86-46fe-93f0-bd2f746a0049.jpg"
                                    alt="" title="" /><noscript><img class="cm-image"
                                        src="../layout/image/d42e2dfa-6a86-46fe-93f0-bd2f746a0049.jpg"
                                        width="590" height="200" alt="" title="" /></noscript>
                            </a>
                        </div>
                    </div>
                    <div class="span8 space-bottom">
                        <div class="center ty-banner__image-wrapper">
                            <a href="#12-tua-sach-phuong-nam-book-dang-doc.html" target="_blank">
                                <img class="ty-pict cm-image" id="det_img_198504092"
                                    src="../layout/image/Sách_PNB_đoạt_giải_590x200_2.jpg" alt=""
                                    title="" /><noscript><img class="cm-image"
                                        src="../layout/image/Sách_PNB_đoạt_giải_590x200_2.jpg"
                                        width="590" height="200" alt="" title="" /></noscript>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 vs-multi-scroller-wrapper home-tabs hidden-phone">
                <div class="vs-multi-scroller vs-simple-scroller clearfix hidden-phone content-tab-0"
                    style="">
                    <div class="vs-mainbox-body vs-toggle-body clearfix" id="sidebox_350">
                        <div id="scroll_list_350" class="owl-carousel owl-theme stopped"
                            style="opacity: 1; display: block">
                            <div class="owl-wrapper-outer">
                            <div class="owl-wrapper"
                                    style="width: 8940px; left: 0px; display: block">';

                                    
                                    if($list!=null)
                                    foreach ($list as $item) {
                                        $i++;
                                    
                                    if($i==4){ echo '</div> <div class="owl-wrapper"
                                    style="width: 8940px; left: 0px; display: block">';
                                     $i =0; }
                                     echo '<div class="owl-item active" style="width: 298px">
                                        <div class="jscroll-item vs-grid et-grid">
                                            <input type="hidden" name="sb__stickers_output_side"
                                                value="L" />
                                            <div class="ty-center scroll-image">
                                                <a href="./product.php?id='.htmlentities($item->id_product).'">
                                                    <img class="ty-pict cm-image"
                                                        id="det_img_1746761672"
                                                        src="../layout/'.htmlentities($item->url).'"
                                                        alt="" title="" style="height: 213px; width: auto;" />
                                                </a>
                                            </div>
                                            <div class="center compact">
                                                <div class="product-container clearfix">
                                                    <form action="#" method="post"
                                                        name="product_form_375000scr_375000158939"
                                                        enctype="multipart/form-data"
                                                        class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                                        <input type="hidden" name="result_ids"
                                                            value="cart_status*,wish_list*,checkout*,account_info*" />
                                                        <input type="hidden" name="redirect_url"
                                                            value="index.php?sl=vi" />
                                                        <input type="hidden"
                                                            name="product_data[scr_375000158939][product_id]"
                                                            value="158939" />
                                                        <div class="title-price-wrapper">
                                                            <bdi>
                                                                <a href="./product.php?id='.htmlentities($item->id_product).'"
                                                                    class="product-title"
                                                                    title="'.htmlentities($item->name).'">'.htmlentities($item->name).'</a>
                                                            </bdi>
                                                            <div class="prices-container clearfix">
                                                                <div
                                                                    class="clearfix product-prices">
                                                                    <div class="ty-float-left">
                                                                        <span
                                                                            class="cm-reload-375000scr_375000158939 ty-price-update"
                                                                            id="price_update_375000scr_375000158939">
                                                                            <input type="hidden"
                                                                                name="appearance[show_price_values]"
                                                                                value="1" />
                                                                            <input type="hidden"
                                                                                name="appearance[show_price]"
                                                                                value="1" />
                                                                            <span class="ty-price"
                                                                                id="line_discounted_price_375000scr_375000158939"><bdi><span
                                                                                        id="sec_discounted_price_375000scr_375000158939"
                                                                                        class="ty-price-num">'.htmlentities($item->price).'</span>&nbsp;<span
                                                                                        class="ty-price-num">đ</span></bdi></span>
                                                                            <!--price_update_375000scr_375000158939-->
                                                                        </span>
                                                                    </div>
                                                                    <div class="ty-float-right">
                                                                        <span
                                                                            class="cm-reload-375000scr_375000158939"
                                                                            id="old_price_update_375000scr_375000158939">
                                                                            <!--old_price_update_375000scr_375000158939-->
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rating-buttons clearfix">
                                                            <div class="ty-float-left vs-rating">
                                                            </div>
                                                            <div
                                                                class="vs-buttons clearfix ty-float-right">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    echo '
                                </div>
                            </div>
                        </div>
                        <!-- Inline script moved to the bottom of the page -->
                    </div>
                </div>
                <ul class="clearfix vs-multi-scroller-ul" style="background:none">
                    <li class="item-0 active">
                        <a class="tab-0">
                            <span>Xem Thêm</span>
                            <span class="vs-title-toggle cm-combination visible-phone"
                                id="sw_sidebox_375">
                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>';
}

?>